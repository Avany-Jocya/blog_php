<?php require('./inc/init.php');?>

<?php 
// $result = $pdo->exec("INSERT INTO blog.user
// (pseudo, email, password, id_user)
// VALUES('test', 'test', 'test', 0);")

// executeRequete("INSERT INTO blog.'user')
// (pseudo, email, password, id_user)
// // VALUES('test1', 'test1', '123', 0);")

// executeRequete("DELETE FROM blog.user where id_user=1");

// executeRequete("INSERT INTO utilisateur
// (slug, email, passwrd, is_admin)
// VALUES('test', 'test', '12345', 1);")

if ($_POST) {
  // debug($_POST['email']);
  $utilisateur = executeRequete("select * from utilisateur where slug='$_POST[pseudo]'");
  if ($utilisateur->num_rows > 0) {
      $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
  } else {
      $_POST['passwrd'] = password_hash($_POST['passwrd'], PASSWORD_BCRYPT);
      executeRequete("INSERT INTO utilisateur
      (slug, email, passwrd, is_admin)
      VALUES ('$_POST[pseudo]', '$_POST[email]', '$_POST[passwrd]', 0);");
      //$contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href='connexion.php'><u>Cliquez ici pour vous connecter</u></a></div>';

      // header("location: connexion.php");
  }
}
?>

<?php include_once("./inc/templates/haut.php");?>
<h1>Inscription</h1>
<form method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Votre pseudo</label>
    <input name="pseudo" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter pseudo">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Votre mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Votre mot de passe</label>
    <input name="passwrd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
<?php include_once("./inc/templates/bas.php");?>