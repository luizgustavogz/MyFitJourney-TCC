<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfitjourney";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    $conn = null;
}
