<?php


namespace Alvinz97\Cart\Helpers;


class Helper
{

    public static function normalizePrice($price)
    {
        return (is_string($price)) ? floatval($price) : $price;
    }

    public static function isMultiArray($array, $recursive = false)
    {
        if( $recursive )
        {
            return (count($array) == count($array, COUNT_RECURSIVE)) ? false : true;
        }
        else
        {
            foreach ($array as $k => $v)
            {
                if (is_array($v))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }

        }
    }

    public static function issetAndHasValueOrAssignDefault(&$var, $default = false)
    {
        if( (isset($var)) && ($var!='') ) return $var;

        return $default;
    }

    public static function formatValue($value, $format_numbers, $config)
    {
        if($format_numbers && $config['format_numbers']) {
            return number_format($value, $config['decimals'], $config['dec_point'], $config['thousands_sep']);
        } else {
            return $value;
        }
    }
}
