<?php

$path = 'new-file.json';

if (file_exists($path)) {
    $jsonString = file_get_contents($path);
    $jsonData = json_decode($jsonString, true);
}
else {
    $jsonData = array();
}

for ($i=1; $i < 999; $i++) { 
    $tmp = array();
    $tmp['slNo'] = $i;
    $tmp['username'] = rand(100000,500000);
    $tmp['sms_title'] = 'Test '.rand(0,5);
    $tmp['sms_details'] = 'Test dfhgf hfghgfh fgh'.rand(10000,99999);
    $tmp['stat'] = 1;
    array_push($jsonData,$tmp);
}

$jsonString = json_encode($jsonData, JSON_PRETTY_PRINT);
$fp = fopen($path, 'w');
fwrite($fp, $jsonString);
fclose($fp);
?>