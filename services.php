<?php
session_start();
  require_once'header.php';

  $count = 0;
  if( isset($_POST['years']) && !empty($_POST['years'])){
    $years=$_POST['years'];
    if (!file_exists('upload/'.$years)) {
      mkdir('upload/'.$years, 0777, true);
    }
  }
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        if (strlen($_FILES['files']['name'][$i]) > 1) {
          $filename = 'upload/'.$years.'/'.$name;
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $filename)) {
                $req = $pdo->prepare("INSERT INTO photos (chemin, annee) VALUES (:chemin, :annee)");
                $req->execute(array(
                  "chemin" => $filename,
                  "annee" => $years)
                );
                $count++;
            }
        }
    }
}
  ?>

  <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Telechargements de nouvelles photos
                  <small>Photos</small>
              </h1>
              <ol class="breadcrumb">
                  <li><a href="index.php">Accueil</a>
                  </li>
                  <li class="active">Charger vos dernières photos</li>
              </ol>

          </div>
      </div>

      <div class="row">
          <div class="col-md-6">

  <form method="post" enctype="multipart/form-data">
    <div class="control-group form-group">

            <label>Veuillez saisir l'année correspondante.</label>
            <h5><?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){ echo "Les ".$count." photos sont bien enregistrer pour l'année ".$years;} ?></h5>
            <input type="text" class="form-control" maxlength="4" name="years" required data-validation-required-message="Veuillez saisir l'année correspondante.">
            <p class="help-block"></p>

    </div>
    <input type="file" name="files[]" value="Parcourir" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
    <input class="button" type="submit" value="Enregistrer" />
</form>
  </div>
    </div>


    <?php
      require_once'footer.php';
     ?>
