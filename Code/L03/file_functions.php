<?php

echo "<pre>";
echo "<h3>Read file content</h3>";

$dataStr = file_get_contents('data.json');
echo $dataStr;

echo "<h3>Parse content</h3>";
$dataArray = json_decode($dataStr, true)['data'];
print_r($dataArray);

echo "<h3>Change data</h3>";
array_walk($dataArray, function (&$item) {
    $item['money'] = $item['age'] * 10;
});
print_r($dataArray);

echo "<h3>Write data to new file</h3>";
$newDataSrt = json_encode(['data' => $dataArray], JSON_PRETTY_PRINT);
$result = file_put_contents('new_data.json', $newDataSrt);
echo "File Write result: " . $result ?: 'false';

echo "\n\n\n\n\n\n</pre>";
