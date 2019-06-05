<?php

require_once __DIR__ . '/lib/KirbyImgx.php';

Kirby::plugin('tristantbg/kirby-imgx', [
    'siteMethods' => require_once __DIR__ . '/lib/siteMethods.php',
    'fileMethods' => require_once __DIR__ . '/lib/fileMethods.php'
]);
