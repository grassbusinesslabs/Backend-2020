<?php

echo "<pre>";
echo "<h3>Array count</h3>";
$array = [1, 2, 3, 4, 5, 6];
print_r($array);
echo "\nArray elements count: " . count($array) . "\n\n";

echo "<h3>inArray function (contain)</h3>";
echo "Is 2 exist in our array: " . (in_array(2, $array) ? 'true' : 'false') . "\n\n";
echo "Is 100 exist in our array: " . (in_array(100, $array) ? 'true' : 'false') . "\n\n";

echo "<h3>Main test array</h3>";
$assocArray = [
    ['name' => 'name1', 'age' => 23, 'city' => 'poltava'],
    ['name' => 'name2', 'age' => 25, 'city' => 'kiev'],
    ['name' => 'name3', 'age' => 35, 'city' => 'poltava'],
    ['name' => 'name4', 'age' => 18, 'city' => 'kiev'],
    ['name' => 'name5', 'age' => 30, 'city' => 'poltava'],
    ['name' => 'name6', 'age' => 28, 'city' => 'odessa'],
    ['name' => 'name7', 'age' => 34, 'city' => 'poltava'],
    ['name' => 'name8', 'age' => 22, 'city' => 'kiev'],
];
// print_r($assocArray);

echo "<h3>Array column</h3>";
echo "Cities list:\n\n";
print_r(array_column($assocArray, 'city'));
$ages = array_column($assocArray, 'age');
$ageSum = array_sum($ages);
$averageAge = $ageSum / count($assocArray);
echo "\n\nAverage age: $averageAge\n\n";

echo "<h3>Array filter</h3>";
$lessAverageAge = array_filter($assocArray, function ($item) use ($averageAge) {
    return $item['age'] < $averageAge;
});
echo "People with age less then average of group: \n\n";
print_r($lessAverageAge);

echo "<h3>Array map</h3>";

echo "Add some money amount to every People: \n\n";

$newPeopleArray = array_map(
    function ($item) {
        $item['money'] = $item['age'] * 10;
        return $item;
    },
    $assocArray);
print_r($newPeopleArray);

echo "<h3>Array reduce</h3>";

echo "Group people names by city: \n\n";

$groupedArray = array_reduce($assocArray, function ($carry, $item) {
    $carry[$item['city']][] = $item['name'];
    return $carry;
}, []);

print_r($groupedArray);

echo "</pre>";
