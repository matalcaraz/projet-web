<?php
    session_start();
    require_once'header.php';


    if (isset($_SESSION['mail']))
    {
        session_destroy();
        ?>
           <script>
            setTimeout(function(){window.location = 'index.php'; }, 1500);
           </script>
           <?php

    }
?>

<div class="modal-content">
                <div class=" text-center" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Vous venez de vous deconnecter</h3>
                            <p>Veuillez patientez vous allez être redirigé sur la page d'accueil...</p>
							 <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                        </div>
                    </div>
                </div>
				</br></br></br>
</div>

<?php
  require_once'footer.php';
 ?>
