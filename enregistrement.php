<?php
  require_once 'header.php';

  // On commence par récupérer les champs
  if(isset($_POST['nom']))      $nom=$_POST['nom'];
  else      $nom="";

  if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
  else      $prenom="";

  if(isset($_POST['email']))      $email=$_POST['email'];
  else      $email="";

  if(isset($_POST['pass']))      $pass=$_POST['pass'];
  else      $pass="";

  if(isset($_POST['age']))      $age=$_POST['age'];
  else      $age="";

  if(isset($_POST['navette']))
  {
      $navette=$_POST['navette'];
    }
  else
  {
    $navette="";
  }

  if(isset($_POST['instrument']))      $instrument=$_POST['instrument'];
  else      $instrument="";
  
  if(isset($_POST['niveau']))      $instrument=$_POST['niveau'];
  else      $niveau="";
  
  if(isset($_POST['superutilisateur']))      $instrument=$_POST['superutilisateur'];
  else      $superutilisateur="";

  // On vérifie si les champs sont vides
  if(empty($nom) OR empty($prenom) OR empty($email) OR empty($pass) OR empty($age) OR empty($navette) OR empty($instrument))
      {
      echo '<font color="red">Attention, aucun champs ne peut rester vide !</font>';

      }

  // Aucun champ n'est vide, on peut enregistrer dans la table
  else
      {

      // on écrit la requête sql
        $sql ="INSERT INTO identites(nom, prenom, mail, password, annee, navette, instrument,niveaux,superutilisateur) VALUES('$nom','$prenom','$email','$pass','$age', '$navette','$instrument','$niveau','$superutilisateur')";

      // on insère les informations du formulaire dans la table
     $pdo->exec($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

     //header("refresh;url=index.php");
     ?>
     <script>
      setTimeout(function(){window.location = 'index.php'; }, 1500);
     </script>
     <?php
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
                            <h3>Félicitation vous venez de vous inscrire a la MasterClass 2017!</h3>
                            <p>Veuillez patientez vous allez être redirigé...</p>
							<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
</div>

<?php
    require_once 'footer.php';
?>