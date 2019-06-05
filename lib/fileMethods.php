<?php
$buildFileURL = function ($params = []) {
    return \KirbyImgx\App::buildFileURL($this, $params);
};
return array(
    'imgxUrl' => $buildFileURL,
);
