<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Symfony\Component\BrowserKit\HttpBrowser;

class solve
{
    public static function girc($url, $key)
    {
        $hdrs = array(
            'user-agent' => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:106.0) Gecko/20100101 Firefox/106.0",
            'referer' => "https://www.2embed.to/"
        );

        $rurl = 'https://www.google.com/recaptcha/api.js';
        $aurl = 'https://www.google.com/recaptcha/api2';

        $url_parsed = parse_url($url);
        $domain = base64_encode($url_parsed['scheme'] . '://' . $url_parsed['host'] . ':443');
        $domain = str_replace("\n", "", $domain);
        $domain = str_replace("=", ".", $domain);

        if ($key) {
            $rurl = $rurl . '?render=' . $key;
            $page_data1 = Http::withHeaders($hdrs)->get($rurl)->body();
            preg_match_all('/releases\/([^\/]+)/', $page_data1, $v);
            $rdata = array(
                'ar' => 1,
                'hl' => 'en',
                'size' => 'invisible',
                'cb' => 'q7ipc9l8vxs3',
                'k' => $key,
                'co' => $domain,
                'v' => $v[1][0],
            );
            $aurl_request = $aurl . '/anchor?' . http_build_query($rdata);
            $page_data2 = Http::withHeaders($hdrs)->get($aurl_request)->body();
            preg_match('/recaptcha-token.+?="([^"]+)/', $page_data2, $rtoken);
            if ($rtoken) {
                $rtoken = $rtoken[1];
            } else {
                return '';
            }
            $pdata = array(
                'v' => $v[1][0],
                'reason' => 'q',
                'k' => $key,
                'c' => $rtoken,
                'sa' => '',
                'co' => $domain
            );
            $hdrs['referer'] = $aurl_request;
            $reload_request = $aurl . '/reload?k=' . $key;
            $page_data3 = Http::withHeaders($hdrs)->asForm()->post($reload_request, $pdata)->body();
            preg_match('/rresp","([^"]+)/', $page_data3, $gtoken);
            if ($gtoken) {
                return $gtoken[1];
            }
        }
    }
}
