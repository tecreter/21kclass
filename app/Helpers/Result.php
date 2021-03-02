<?php

if (! function_exists('result_ok')) {
    function result_ok() {
        return array(
            getConstantsValue('JSON_KEY_STATUS') => 200,
            getConstantsValue('JSON_KEY_RESULT') => true
        );
    }
}

if (! function_exists('result_ok_response_code')) {
    function result_ok_response_code($code) {
        return array(
            getConstantsValue('JSON_KEY_STATUS') => 200,
            getConstantsValue('JSON_KEY_RESULT') => true,
            getConstantsValue('JSON_KEY_RES_CODE') => $code
        );
    }
}

if (!function_exists('result_bad_request')) {
    function result_bad_request() {
        return array(
            getConstantsValue('JSON_KEY_STATUS') => 400,
            getConstantsValue('JSON_KEY_RESULT') => false
        );
    }
}

if (!function_exists('result_internal_server_error')) {
    function result_internal_server_error() {
        return array(
            getConstantsValue('JSON_KEY_STATUS') => 500,
            getConstantsValue('JSON_KEY_RESULT') => false,
        );
    }
}

if (!function_exists('result_bad_request_error_code')) {
    function result_bad_request_error_code($code) {
        return array(
            getConstantsValue('JSON_KEY_STATUS') => 400,
            getConstantsValue('JSON_KEY_RESULT') => false,
            getConstantsValue('JSON_KEY_ERR_CODE') => $code
        );
    }
}
