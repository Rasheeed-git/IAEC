<?php 
 $username = 'root';
 $password = '';
 $host='localhost';
 $database='IAEC';

 $dsn="mysql:host=$host;dbname=$database;";


 try {
    $pdo = new PDO($dsn, $username, $password);
    echo '<h1>Connection successful.</h1>';
 } catch(PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
 }
