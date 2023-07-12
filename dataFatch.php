<?php
$path = 'new-file.json';
if (file_exists($path)) {
    $jsonString = file_get_contents($path);
    $jsonData = json_decode($jsonString, true);
    echo "<pre>";
    //print_r($jsonData);
    echo "</pre>";
    echo $jsonData[0]['username'];
}
?>