<?php

echo "<pre>";
echo "<h3>String case</h3>";
$str = "My example string, that will be transformed.";
$strCyr = "Мій рядок, який будемо трансформувати";

echo strtoupper($str) . "\n\n";

echo strtoupper($strCyr) . "\n\n";
echo mb_strtoupper($strCyr) . "\n\n";

echo "<h3>String Position</h3>";
$position = strpos($str, 'that');
echo "Position of 'that' in string: " . ($position ?: 'false') . "\n\n";

$position = strpos($str, 'that', 25);
echo "Position of 'that' in string: " . ($position ?: 'false') . "\n\n";

echo "<h3>String Explode/Implode</h3>";
$strForArray = "111,222,333,444,555,666";
echo $strForArray . "\n\n";

$array = explode(',', $strForArray);
print_r($array);

$arrayFromSrt = implode(' -=- ', $array);
print("\n" . $arrayFromSrt . "\n\n");

echo "<h3>String Format</h3>";
printf("[%s] - first var,\n[%-10.9s] - formatted var,\n[%10.9s] - formatted var\n\n", 123456, 123456, 123456);

echo "</pre>";
