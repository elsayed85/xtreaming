<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('profile', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('index'));
    $trail->push('Profile', route('profile'));
});

Breadcrumbs::for('settings', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('index'));
    $trail->push('Settings', route('settings'));
});
