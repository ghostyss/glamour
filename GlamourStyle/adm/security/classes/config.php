<?php

$curpageURL = $_SERVER["SERVER_NAME"];
$db = array();
$db = explode('.', $curpageURL);
$host = "127.0.0.1";
if ($db[0] == 'localhost') {
    $dbName = 'RoomP';
} else {
    $dbName = $a[0];
}
$dbUser = "root2";
$dbPass = "4875372";
?>
