<?php

$arr = array(1, 2, 3);
$arr1 = [1, 2, 3];

$array1 = [
    "foo" => "bar",
    "bar" => "foo",
];
echo '<pre>';
var_dump($array1);
echo '</pre><br>';
// Начиная с PHP 5.4

$arr2 = [1, 2, "key" => 3];
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
echo '<pre>';
var_dump($array2);
echo '</pre><br>';
$array3 = [
    "foo" => "foo_foo",
    "bar" => "bar_bar",
    100 => -100,
    -100 => 100,
];
echo '<pre>';
var_dump($array3);
echo '</pre><br>';
$array4 = ["re" => "foo", "bar", "hallo", $array3];
echo '<pre>';
var_dump($array4);
echo '</pre><br>';

echo $array4[0];
echo '<br>';
echo $array3['foo'];
echo $array3['test'];
echo '<br>';

$array4[] = 'new';
$array4['test'] = 'new test';
echo '<pre>';
print_r($array4);
echo '</pre><br>';

echo __LINE__;

$a = (5 + 3) * 2;
