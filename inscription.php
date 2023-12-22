<?php require ('./inc/init.php');?>

<?php 
executeRequete("INSERT INTO utilisateur (slug,email, passwrd,is_admin) VALUES ('test1', 'test1', '123', 0);")

// executeRequete("DELETE FROM blog.'user' where id_user=1");

?>

<?php include_once("./inc/templates/haut.php");?>
<h1>Inscription</h1>
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="validationCustom01" value="Prenom" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationCustom02" value="Nom de famille" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Pseudo</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Choisissez un pseudo.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ville</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Choisissez une ville valide.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Etat</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Selectionnez...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Selectionnez un Etat valide.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Code Postale</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Entrez un code postale valide.
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
<?php include_once("./inc/templates/bas.php");?>