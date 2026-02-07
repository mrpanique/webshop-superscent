<?php

// Csatlakozas az adatbazishoz
// DBH = Data Base Handler

$host = 'localhost';
$dbname = 'superscent_db';
$dbusername = 'root';
$dbpassword = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>