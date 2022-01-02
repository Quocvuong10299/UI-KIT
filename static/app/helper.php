<?php
if (!function_exists('lw_default_value')) {
    function lw_default_value($value, $default = '')
    {
        if (isset($value)) return $value;
        return $default;
    }
}