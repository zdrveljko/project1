<?php

$dsn="mysql:host=localhost; port=3306; dbname=project1; user='root'; charset=utf8mb4"; 

$pdo = new PDO($dsn);

$statment= $pdo->prepare("select * from users");

$statment->execute();

$posts = $statment->fetchAll();



