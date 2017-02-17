<?php
    session_start();
    require_once'header.php';

	$titre = $_GET['titre'];

if(isset($_GET['instrument']))      $instrument=$_GET['instrument'];

$nomcomplet=$_SESSION['nom'] . ' ' . $_SESSION['prenom'];

$sql = "UPDATE morceaux SET $instrument='$nomcomplet' WHERE titre='$titre'"; 
$pdo->query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

  ?>
     <script>
      setTimeout(function(){window.location = 'calendrier.php'; }, 1500);
     </script>
     <?php

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
                            <h3>Félicitation votre participation au morceau a était prise en compte</h3>
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


