<?php require ('./inc/init.php');?>

<?php 
executeRequete("INSERT INTO utilisateur (slug,email, passwrd,is_admin) VALUES ('test1', 'test1', '123', 0);")

// executeRequete("DELETE FROM blog.'user' where id_user=1");

?>

<?php include_once("./inc/templates/haut.php");?>
<h1>Inscription</h1>
<?php include_once("./inc/templates/bas.php");?>