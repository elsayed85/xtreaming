<?php
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
