<?php
namespace helpers;

/**
 * String Helper Class
 *
 * @package helpers
 * @author Vijay Mahrra <vijay.mahrra@gmail.com>
 * @copyright (c) Copyright 2013 Vijay Mahrra
 * @license GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
 */

class String extends \Prefab {

    /**
     * generate random string
     *
     * @param int length of password
     * @param string chars characters to use
     * @return string password
     */
    public static function random($length = 10, $chars = null)
    {
        if (empty($chars)) {
            $chars = '23456789abcdefghjkmnopqrstuvwxyz';
        }
        $chars = str_shuffle($chars); // shuffle base character string
        $x = strlen($chars) - 1;
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, rand(0, $x), 1);
        }
        return $str;
    }
}