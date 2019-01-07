<?php

namespace Tristantbg;

use Imgix\UrlBuilder;

if (!option('plugin.imgx.disable') && option('plugin.imgx.url')) {
} else {
    return;
}

class Imgx
{

    public static function buildURL($id, $params = [])
    {
    	$defaultParams = [
    		'fit' => 'crop',
    		'crop' => 'entropy'
    	];
        $builder = new \Imgix\UrlBuilder(option('plugin.imgx.url'));

        $builder->setUseHttps(true);

        $params = array_merge($params, $defaultParams);
		
		return $builder->createURL($id, $params);
    }

}
