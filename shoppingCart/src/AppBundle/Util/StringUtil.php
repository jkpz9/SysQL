<?php

namespace AppBundle\Util;

use Symfony\Component\Validator\Constraints\DateTime;


class StringUtil {
    
    public static function isNullOrEmptyString($str) {
        return (!isset($str) || trim($str) === '');
    }
    
    public static function replace_char($oldChar, $newChar, $str) {
        return str_replace($oldChar, $newChar, $str);
    }

    public function canMakeDateFromString($x_fomat, $str) {
        return ! (\DateTime::createFromFormat($x_fomat, $str) === false);
    }
    
}