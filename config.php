<?php

if (!class_exists('Tristantbg\Imgx')) {
    require_once __DIR__ . '/lib/imgx.php';
}

Kirby::plugin('tristantbg/kirby3-imgx', [
    'siteMethods' => require_once __DIR__ . '/lib/siteMethods.php'
]);
