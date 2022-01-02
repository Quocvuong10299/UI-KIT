<?php
define('LWS_ROOT_PATH', __DIR__);
if (!function_exists('lw_include_template_part')) {
    function lw_include_template_part($filePath, $variables = array(), $print = true)
    {
        $output = NULL;
        if (file_exists($filePath)) {
            extract($variables);
            ob_start();
            include $filePath;
            $output = ob_get_clean();
        }
        if ($print) {
            print $output;
        }
        return $output;
    }
}
require_once('app/helper.php');
require_once('app/laravel_helper.php');
require_once('app/UI/Component.php');
require_once('app/UI/Demo.php');

use Letweb\UI\Component;

if (!function_exists('lws_get_component')) {
    function lws_get_component($relativePath)
    {
        return new Component(LWS_ROOT_PATH . '/components/' . $relativePath);
    }
}

if (!function_exists('lws_is_production')) {
    function lws_is_production()
    {
        $productionDomains = ['uikit.letweb.net'];
        return in_array($_SERVER['SERVER_NAME'], $productionDomains);
    }
}

