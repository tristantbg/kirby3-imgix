<?php
$buildFileURL = function ($params = []) {
    return \KirbyImgix\App::buildFileURL($this, $params);
};
return array(
    'imgixUrl' => $buildFileURL,
);
