<?php

use \Dotenv\Dotenv;
use \Imgix\UrlBuilder;

namespace KirbyImgix;

$dotenv = new \Dotenv\Dotenv(__DIR__ . str_repeat(DIRECTORY_SEPARATOR . '..', 1));
$dotenv->load();

class App
{

    private static $defaultParams  = [
        'fit' => 'crop',
        'crop' => 'entropy',
        'auto' => 'format,compress',
        'cs' => 'tinysrgb'
      ];
    private static $builder = null;

    public static function init()
    {

      self::$builder = new \Imgix\UrlBuilder($_ENV['IMGIX_URL']);
      self::$builder->setUseHttps(true);

      if (option('kirby-imgix.defaultparams')) {
        self::$defaultParams = option('kirby-imgix.defaultparams');
      }

		  return self::$builder;
    }

    public static function buildURL($url, $params = [])
    {

      if(!self::$builder) \KirbyImgix\App::init();

      $params = array_merge($params, self::$defaultParams);

      return self::$builder->createURL($url, $params);
    }

    public static function buildFileURL($file, $params = [])
    {

      if(!self::$builder) \KirbyImgix\App::init();

      $params = array_merge($params, self::$defaultParams);

      $url = str_replace(kirby()->root('media'), '', $file->mediaRoot());

      return self::$builder->createURL($url, $params);
    }

}
