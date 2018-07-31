<?php
namespace App\Utils;

/**
 * Class ReverseStringUtils
 * @package App\Utils
 */
class ReverseStringUtils
{
    /**
     * @param string $text
     * @return string
     */
    public function reverse(string $text): string
    {
        $len = strlen($text);
        for($i=0; $i < $len/2; $i++) {
            list($text[$i], $text[$len-$i-1]) = array($text[$len-$i-1], $text[$i]);
        }

        return $text;
    }
}
