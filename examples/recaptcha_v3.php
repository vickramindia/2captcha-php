<?php

set_time_limit(610);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \TwoCaptcha\TwoCaptcha('fea4eebc4b9a7aad11a65fbdf813dffa');
try {
    $result = $solver->recaptcha([
        'sitekey' => '6Le-wvkSVVABCPBMRTvw0Q4Muexq1bi0DJwx_mJ-',
        'url'     => 'https://mysite.com/page/with/recaptcha',
        'version' => 'v3',
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
