<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "hotel";

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
    // echo "sucsses";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}
?>