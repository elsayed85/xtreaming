<?php
function getYear($date)
{
    return date('Y', strtotime($date));
}

function isAr()
{
    return app()->getLocale() == 'ar';
}

function authName()
{
    return auth()->user()->name;
}

function authNameFirstLetter()
{
    return strtoupper(substr(auth()->user()->name, 0, 1));
}
