<?php

// $mysqli = new mysqli("localhost", "db_user", "223105", "blog");
// if ($mysqli->connect_error) die("un problème est survenu lors de la tentative de connxion a la BDD:.$mysqli->connect_error");

$pdo = new PDO('mysql:host=localhost;dbname=blog', "db_user", "223105", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$result = $pdo-> exec ("")

?>