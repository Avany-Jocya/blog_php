<?php

// $mysqli = new mysqli("localhost", "db_user", "223105", "blog");
// if ($mysqli->connect_error) die("un problème est survenu lors de la tentative de connxion a la BDD:.$mysqli->connect_error");

$pdo = new PDO('mysql:host=localhost;dbname=blog', "root", "Nayah441#", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// $result = $pdo->exec("INSERT INTO blog.`user`
// (pseudo, email, password, id_user)
// VALUES('test2', 'test1', '123', 0);")

?>