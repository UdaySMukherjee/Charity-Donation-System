<?php
//$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=ngo','root', '');

try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=ngo', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>