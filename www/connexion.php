<?php

use LDAP\Result;

 include_once("./inc/templates/haut.php"); ?>
<?php
//logique
if ($_POST) {
    $resultat=executeRequete("select * FROM utilisateur where slug='$_POST[slug]'");
    if ($resultat->num_rows != 0){
        $utilisateur=$resultat->fetch_assoc();
        if (password_verify($_POST['passwrd'], $utilisateur['passwrd'])){

        }else{
            $contenu .='<div class="erreur">Erreur Pseudo inexistant!</div>';
        }
    }else{
        $contenu .='<div class="erreur">Erreur Pseudo inexistant!</div>';
    }
}




?>
<form method="post" >
<!-- Slug input -->
<div class="form-outline mb-4"> 
    <label class="form-label">Identifiant</label>

    <input type="text" name="slug"  minlength="1" maxlength="20" class="form-control"/>
</div>   

<!-- Password input -->
<div class="form-outline mb-4">
    <input type="password" name="passwrd" class="form-control" />
    <label class="form-label" >Password</label>
</div>
<!-- Submit button -->
<button class="btn btn-primary btn-block mb-4">Se connecter</button>
</form>
<?php include_once('./inc/templates/bas.php'); ?>
