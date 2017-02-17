<?php
session_start();
require_once'header.php';



// on teste si le visiteur a soumis le formulaire de connexion
if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['pass'])) {
  extract($_POST);
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $ok = false;
  // on recupère le password de la table qui correspond au email du visiteur
  $sql = "select * from identites where password='$pass' and mail='$email'";
  $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $req->setFetchMode(PDO::FETCH_OBJ);
	while( $resultat = $req->fetch() )
	{
		$ok = true;
		$Utilisateur = $resultat;

	}
	$req->closeCursor();

  if(!$ok) {
  ?>
     <script>
      setTimeout(function(){window.location = 'connexion.php'; }, 1500);
     </script>
     <?php

  }
  else {

    $_SESSION['mail'] = $Utilisateur->mail;
    $_SESSION['nom'] = $Utilisateur->nom;
    $_SESSION['prenom'] = $Utilisateur->prenom;
    $_SESSION['instrument'] = $Utilisateur->instrument;
    $_SESSION['navette'] = $Utilisateur->navette;
	$_SESSION['superutilisateur'] = $Utilisateur->superutilisateur;

  ?>
     <script>
      setTimeout(function(){window.location = 'index.php'; }, 1500);
     </script>
     <?php

  }
}


?>

<div class="modal-content">
                <div class=" text-center "data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                    	<?php
                            if($ok) {
                        ?>
                        <div class="section-title text-center">
                            <h3>Félicitations vous venez de vous connecter</h3>
                            <p>Veuillez patientez vous allez être redirigé sur la page d'accueil...</p>
							 <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                        <?php
                                }
                                else
                                {
                        ?>
                        <div class="section-title text-center">
                            <h3>Mauvais identifiant / mot de passe.</h3>
                            <p>Veuillez patientez pour réessayer...</p>
							<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                        <?php
                                }
                        ?>
                    </div>
                </div>
				</br></br></br>
				</div>


<?php
  require_once'footer.php';
 ?>
