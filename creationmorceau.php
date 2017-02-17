<?php
session_start();
require_once'header.php';

// On commence par récupérer les champs
if(isset($_GET['jour']))      $jour=$_GET['jour'];
else      $jour="null";

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['artiste']))      $artiste=$_POST['artiste'];
else      $artiste="";

if(isset($_GET['instrument']))      $instrument=$_GET['instrument'];
else      $instrument="Null";


if ($instrument=="Guitare") {
  $guitare=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
  $piano="Null";
  $saxophone="Null";
  $batterie="Null";
  $contrebasse="Null";
  $trompette="Null";

} elseif ($instrument=="Batterie") {
  $guitare="Null";
  $piano="Null";
  $saxophone="Null";
  $batterie=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
  $contrebasse="Null";
  $trompette="Null";

} elseif ($instrument=="Piano") {
  $guitare="Null";
  $piano=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
  $saxophone="Null";
  $batterie="Null";
  $contrebasse="Null";
  $trompette="Null";
} elseif ($instrument=="Saxophone") {
  $guitare="Null";
  $piano="Null";
  $saxophone=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
  $batterie="Null";
  $contrebasse="Null";
  $trompette="Null";
} elseif ($instrument=="Contrebasse") {
  $guitare="Null";
  $piano="Null";
  $saxophone="Null";
  $batterie="Null";
  $contrebasse=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
  $trompette="Null";
} elseif ($instrument=="Trompette") {
  $guitare="Null";
  $piano="Null";
  $saxophone="Null";
  $batterie="Null";
  $contrebasse="Null";
  $trompette=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];
}

// On vérifie si les champs sont vides
if(empty($jour) OR empty($titre) OR empty($artiste))
    {
    echo '<font color="red">Attention, aucun champs ne peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else
    {
    // on écrit la requête sql
    $sql = "INSERT INTO morceaux(jour,artiste, titre, guitare, piano, batterie, trompette, saxophone, contrebasse) VALUES('$jour','$artiste','$titre','$guitare','$piano','$batterie', '$trompette','$saxophone','$contrebasse')";

    // on insère les informations du formulaire dans la table
    $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
?>
    <script>
     setTimeout(function(){window.location = 'calendrier.php'; }, 1500);
    </script>
<<?php
    }

?>


<div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Félicitation vous venez d'ajouter un morceau pour le <php  ?></h3>
                            <p>Veuillez patientez vous allez être redirigé...</p>
                            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
				</br></br></br>
</div>

<?php
    require_once 'footer.php';
?>
