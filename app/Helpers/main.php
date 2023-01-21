<?php

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

function getYear($date)
{
    return date('Y', strtotime($date));
}

function isAr()
{
    return app()->getLocale() == 'ar';
}

function isEn()
{
    return app()->getLocale() == 'en';
}

function isAdmin()
{
    return auth()->user()->is_admin == true;
}

function genderText($model = null)
{
    if ($model) {
        return $model->is_male ? "Male" : "Female";
    }
    return auth()->user()->is_male ? "Male" : "Female";
}

function authName()
{
    return auth()->user()->name;
}

function authNameFirstLetter()
{
    return strtoupper(substr(auth()->user()->name, 0, 1));
}

function getRGBof($image_url)
{
    try {
        $palette = Palette::fromFilename($image_url);
        $extractor = new ColorExtractor($palette);
        $color = $extractor->extract(2);
        $color = min(array_values($color));
        return (new Color())->fromIntToRgb($color);
    } catch (\Throwable $th) {
        return [0, 0, 0];
    }
}

function tmdb_image($poster, $width = 500)
{
    return "https://image.tmdb.org/t/p/w$width/$poster";
}

function tmdb_backdrop($backdrop, $width = 1920, $height = 800)
{
    return "https://image.tmdb.org/t/p/w" . $width . "_and_h" . $height . "_multi_faces/$backdrop";
}


function filterbasedOnLanguageKey($text)
{
    $suportedLanguages = [
        'english',
        'en',
        'eng',
        "arabic",
        "ar",
        "arab",
        'ara',
        "العربية",
        "عربي",
        "عربى",
        "عربية",
        "عربيه",
    ];
    $text = strtolower($text);
    return in_array($text, $suportedLanguages);
}
