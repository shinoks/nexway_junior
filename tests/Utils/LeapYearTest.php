<?php
namespace App\Test\Utils;

use App\Utils\ReverseStringUtils;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function testReverse()
    {
        $strings = [
            "Abcdefghijk",
            "Abcdefghijkl",
            "Abcdefghijkl\n",
            "",
            "Abcd\nefgh\rijkl\tmnop",
            "Zażółć gęślą jaźń",
            "Quick brown fox\0 jumped over the lazy dog",
            "读万卷书不如行万里路"
        ];
        $reverseString = new ReverseStringUtils();
        foreach ($strings as $string){
            $result = $reverseString->reverse($string);

            $this->assertEquals($result,strrev($string));
        }

    }
}
