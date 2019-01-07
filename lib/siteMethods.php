<?php
$buildURL = function ($id, $params = []) {
    return \Tristantbg\Imgx::buildURL($id, $params);
};
return array(
    'imgxUrl' => $buildURL,
);
