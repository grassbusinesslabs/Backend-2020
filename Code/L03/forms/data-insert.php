<?php
$messageNick = htmlspecialchars($_POST['nick'] == '' ? "anonymous" : $_POST['nick']);
$messageText = htmlspecialchars($_POST['message']);
$messageTime = time();

try {
    $dataStr = file_get_contents('data.json');
    $dataArray = json_decode($dataStr, true);
} catch (Exception $ex) {
    $dataArray = [];
}

$dataArray[] = ['nick' => $messageNick, 'message' => $messageText, 'time' => $messageTime];
$newDataSrt = json_encode($dataArray, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json', $newDataSrt);

header('Location: ./index.php');
