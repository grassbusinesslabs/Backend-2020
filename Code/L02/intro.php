<?php

function test1($string)
{
    $string .= "test";
}

function test2(&$string)
{
    $string .= "test";
}

$str = "init ";

test1($str);

echo $str . "\n\n<br>";

test2($str);

echo $str . "\n\n<br>";

