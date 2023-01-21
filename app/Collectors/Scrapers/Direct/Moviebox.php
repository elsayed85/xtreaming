<?php

namespace App\Collectors\Scrapers\Direct;

use App\Collectors\Helpers\JaroWinkler;
use Illuminate\Support\Facades\Http;
use Nacmartin\PhpExecJs\PhpExecJs;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\DomCrawler\Crawler;

class Moviebox
{
    protected const API = 'https://showbox.shegu.net/api/api_client/index/';
    public const IP = "http://152.32.149.160";
    public const IV = "wEiphTn!";
    public const KEY = "123d6cedf626dy54233aa1w6";
    public const APP_KEY = "moviebox";
    public const APP_ID = "com.tdo.showbox";
    public const PROVIDER = "moviebox";

    public static function encrypt($message)
    {
        $key = self::KEY;
        $iv = self::IV;
        $phpexecjs = new PhpExecJs();
        $phpexecjs->createContextFromFile(public_path('js/crypto-js.min.js'));
        return $phpexecjs->evalJs("keyHex = CryptoJS.enc.Utf8.parse('$key');ivHex = CryptoJS.enc.Utf8.parse('$iv');encrypted = CryptoJS.TripleDES.encrypt('$message', keyHex, { iv: ivHex, mode: CryptoJS.mode.CBC, padding: CryptoJS.pad.Pkcs7 }); encrypted.ciphertext.toString(CryptoJS.enc.Base64)");
    }

    public static function base64body($body)
    {
        $phpexecjs = new PhpExecJs();
        $phpexecjs->createContextFromFile(public_path('js/crypto-js.min.js'));
        return $phpexecjs->evalJs("words = CryptoJS.enc.Utf8.parse('$body');CryptoJS.enc.Base64.stringify(words);");
    }

    public static function getVerify($str1, $str2, $str3)
    {
        if ($str1) {
            return md5(md5($str2) . $str3 . $str1);
        }
        return null;
    }

    public static function getExpiryDate()
    {
        $phpexecjs = new PhpExecJs();
        return $phpexecjs->evalJs("(Math.floor(Date.now() / 1000)) + 60 * 60 * 12");
    }

    public static function makeid($length)
    {
        $result = '';
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $result .= $characters[rand(0, $charactersLength - 1)];
        }
        return $result;
    }

    public static function queryAPI($query)
    {
        $encryptedQuery = self::encrypt($query);
        $appKeyHash = md5(self::APP_KEY);
        $verify = self::getVerify($encryptedQuery, self::APP_KEY, self::KEY);
        $body = '{"app_key":"' . $appKeyHash . '","verify": "' . $verify . '","encrypt_data":"' . $encryptedQuery . '"}';
        $base64 = self::base64body($body);
        $data = [
            "data" => $base64,
            "appid" => '27',
            "platform" => "android",
            "version" => "129",
            "medium" => "Website&token" . self::makeid(32)
        ];
        return Http::withHeaders([
            'user-agent' => getRandomHost(),
            'Platform' => 'android',
            'Accept' => 'charset=utf-8',
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])
            ->asForm()
            ->post(self::API, $data)
            ->json();
    }

    public static function search($data)
    {
        [$type, $text, $year, $season, $episode] = [$data['type'], $data['text'], $data['year'], $data['season'], $data['episode']];
        $expire = self::getExpiryDate();
        $searchQuery = '{"childmode":"1","app_version":"11.5","appid":"com.tdo.showbox","module":"Search3","channel":"Website","page":"1","lang":"en","type":"all","keyword":"' . $text . '","pagelimit":"20","expired_date":"' . $expire . '","platform":"android"}';
        $results = self::queryAPI($searchQuery);
        if ($results['code'] == 1) {
            $show = collect($results['data'])
                ->map(function ($el) use ($text) {
                    return [
                        'id' => $el['id'],
                        'title' => $el['title'],
                        'year' => $el['year'],
                        'similarity' => JaroWinkler::compare($el['title'], $text)
                    ];
                })
                ->sortByDesc('similarity')
                ->when($type == "movie" && !is_null($year), function ($collection) use ($year) {
                    return $collection->where('year', $year);
                })
                ->first();

            if (!$show) {
                return null;
            }

            $expire = self::getExpiryDate();
            if ($type == "movie") {
                $queryDirect = '{"childmode":"0","uid":"","app_version":"11.5","appid":"' . self::APP_ID . '","module":"Movie_downloadurl_v3","channel":"Website","mid":"' . $show['id'] . '","lang":"","expired_date":"' . $expire . '","platform":"android","oss":"1","group":""}';
            } else {
                $queryDirect = '{"childmode":"0","app_version":"11.5","module":"TV_downloadurl_v3","channel":"Website","episode":"' . $episode . '","expired_date":"' . $expire . '","platform":"android","tid":"' . $show['id'] . '","oss":"1","uid":"","appid":"' . self::APP_ID . '","season":"' . $season . '","lang":"en","group":""}';
            }

            $results = self::queryAPI($queryDirect);
            if ($results['code'] == 1) {
                $data = collect($results['data']['list'])
                    ->map(function ($el) {
                        $real_quality = str_replace('p', '', strtolower($el['real_quality']));
                        $real_quality = str_replace('k', '', $real_quality);
                        if (!is_numeric($real_quality)) {
                            $real_quality = 720;
                        } elseif ($real_quality == 4) {
                            $real_quality = 2048;
                        }
                        $url = $el['path'];
                        if (!$url) {
                            return null;
                        }
                        $ext = pathinfo(strtok($url, '?'), PATHINFO_EXTENSION);
                        // remove any extra pramters
                        return [
                            'url' => $url,
                            'ext' => $ext,
                            'label' => (int) $real_quality,
                        ];
                    })
                    ->filter()
                    ->sortByDesc('quality')
                    ->values()
                    ->toArray();
                if (!count($data)) {
                    return null;
                }
                return [
                    'urls' => $data,
                    'tracks' => [],
                    "provider" => self::PROVIDER
                ];
            }
            return null;
        }
        return null;
    }
}
