<?php
$buildURL = function ($url, $params = []) {
    return \KirbyImgix\App::buildURL($url, $params);
};
return array(
    'imgixUrl' => $buildURL,
);
