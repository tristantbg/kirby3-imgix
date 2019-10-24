<?php

require_once __DIR__ . '/lib/KirbyImgix.php';

Kirby::plugin('tristantbg/kirby-imgix', [
    'siteMethods' => require_once __DIR__ . '/lib/siteMethods.php',
    'fileMethods' => require_once __DIR__ . '/lib/fileMethods.php'
]);
