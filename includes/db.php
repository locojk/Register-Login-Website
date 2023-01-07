<?php
$serverName = "db.cs.dal.ca";
$userName = "gao4";
$password = "9WXmPrFfg3jpAiX26d5PUxBwF";

try {
    $connect = new PDO("mysql:host=$serverName;dbname=gao4",$userName, $password);
    $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connect failed: " . $e -> getMessage();
}