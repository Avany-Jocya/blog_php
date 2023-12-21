<?php require ('./inc/init.php');?>

<?php executeRequete("INSERT INTO `user` (pseudo, email, passwrd, id_user) VALUES ('test3', 'test1', '123', 0);")?>

<?php include_once("./inc/templates/haut.php");?>
<h1>Inscription</h1>
<?php include_once("./inc/templates/bas.php");?>