<?php

$mysqli = new mysqli("localhost", "root", "Nayah441#", "blog");
if ($mysqli->connect_error) die("un problème est survenu lors de la tentative de connxion a la BDD:.$mysqli->connect_error");

require('function.php');

// $pdo = new PDO('mysql:host=localhost;dbname=blog', "root", "Nayah441#", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// $result = $pdo->exec("INSERT INTO blog.`user`
// (pseudo, email, password, id_user)
// VALUES('test2', 'test1', '123', 0);")

?>