<?php
$buildURL = function ($url, $params = []) {
    return \KirbyImgx\App::buildURL($url, $params);
};
return array(
    'imgxUrl' => $buildURL,
);
