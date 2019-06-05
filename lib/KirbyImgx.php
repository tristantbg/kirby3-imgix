<?php

use \Dotenv\Dotenv;
use \Imgix\UrlBuilder;

namespace KirbyImgx;

$dotenv = new \Dotenv\Dotenv(__DIR__ . str_repeat(DIRECTORY_SEPARATOR . '..', 1));
$dotenv->load();

class App
{

    private static $defaultParams  = [
        'fit' => 'crop',
        'crop' => 'entropy'
      ];
    private static $builder = null;

    public static function init()
    {

      self::$builder = new \Imgix\UrlBuilder($_ENV['IMGX_URL']);
      self::$builder->setUseHttps(true);

		  return self::$builder;
    }

    public static function buildURL($url, $params = [])
    {

      if(!self::$builder) \KirbyImgx\App::init();

      $params = array_merge($params, self::$defaultParams);

      return self::$builder->createURL($url, $params);
    }

    public static function buildFileURL($file, $params = [])
    {

      if(!self::$builder) \KirbyImgx\App::init();

      $params = array_merge($params, self::$defaultParams);

      $url = str_replace($kirby->root('media'), $file->mediaRoot());

      return self::$builder->createURL($url, $params);
    }

}
