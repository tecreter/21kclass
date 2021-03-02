<?php

if (! function_exists('getConstantsValue')) {
    function getConstantsValue($name) {
        return config('constants.' . $name);
    }
}

if (!function_exists('getMicroTime')) {
    function getMicroTime() {
        list($usec, $sec) = explode(" ", microtime());
        $rr = explode('.', $usec);
        return $sec . substr($rr[1], 0, 3);
    }
}

if (!function_exists('getRandomNumbers')) {
    function getRandomNumbers($length = 6) {
        $characters = '0123456789';
        $string = '';

        for($i=0; $i<$length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }
}

if (!function_exists('getRandomAlphaNumeric')) {
    function getRandomAlphaNumeric($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for($i=0; $i<$length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }
}

if (! function_exists('cdn_mix')) {
    function cdn_mix($path, $manifestDirectory = '')
    {
        $mixPath = mix($path, $manifestDirectory);
        $cdnUrl  = config('assets.cdn_url');
        $env     = config('app.env');
        if (!is_null($cdnUrl) && ($env === 'local' || $env === 'production' || $env === 'staging')) {
            $mixPath = $cdnUrl . $mixPath;
        }
        return $mixPath;
    }
}
