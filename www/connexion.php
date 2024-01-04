<?php require('./inc/init.php'); ?>
<?php
//logique

// debug($_SESSION);

if(isset($_GET['action']) && $_GET['action'] === "deconnexion"){
    session_destroy();
}

if (internauteEstConnecte()){
    header("location: profil.php");
}

if($_POST) {
    $resultat = executeRequete("SELECT * FROM utilisateur WHERE slug='$_POST[slug]'");
    if ($resultat->num_rows != 0){
        $utilisateur = $resultat->fetch_assoc();
        if (password_verify($_POST['passwrd'], $utilisateur['passwrd'])){
            foreach($utilisateur as $indice => $element){
                if($indice!='passwrd'){
                    $_SESSION['utilisateur'][$indice] = $element;
                }
            }
            header ('location: profil.php');
        }else{
            $contenu .='<div class="erreur" >Erreur de mot de passe!</div>';
        }
    }else{
        $contenu .='<div class="erreur">Erreur Pseudo inexistant!</div>';
    }
}




?>
<?php require("./inc/templates/haut.php"); ?>
<?php echo $contenu ?>
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
<?php require_once('./inc/templates/bas.php'); ?>
