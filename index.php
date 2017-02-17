<?php
 session_start();
 $ok=false;
  require_once'header.php';

  if (isset($_SESSION['mail']))
    {
        $ok=true;
    }
    else
    {
        $ok=false;
    }
  ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill img-responsive" style="background-image:url('images/Jazz1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/Jazz2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/Jazz3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

            <hr>
            <!-- Call to Action Section -->

			<?php  if(isset($_SESSION['superutilisateur'])&& $_SESSION['superutilisateur']=="Oui"){?>
            <div class="well">
                <div class="row">
                   <div class="col-md-8">
                        <p> Vous pouvez inscrire un élève ou bien inscrire un administrateur en lui donnant l'accés au ajouts de photos. </p>
                    </div>
                    <div class="col-md-4">
                      <a class="btn btn-lg btn-default btn-block" href="deconnexion.php">Création d'un compte administrateur</a>
                    </div>
                  </div>
            </div>
            <?php
    }
  ?>


            <?php
                    if($ok) {
                    ?>
            <div class="well">
                <div class="row">
                   <div class="col-md-8">
                        <p>Merci <?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?> de votre inscription </p>
                        <p> Vous êtes inscrit au ateliers de : <?php echo $_SESSION['instrument']; ?></p>
                        <p> Nous sommes heureux de vous compter parmis nous!</p>
                    </div>
                    <div class="col-md-4">
                      <a class="btn btn-lg btn-default btn-block" href="deconnexion.php">Deconnexion </a>
                    </div>
                  </div>
            </div>
            <?php
    }
  ?>
  <?php
          if(!$ok) {
          ?>
  <div class="well">
      <div class="row">
          <div class="col-md-8">
              <p>Identifiez vous pour soumettre des morceaux. </p>
              <p> Ou inscrivez-vous si ce n'est pas deja fait!</p>
          </div>
          <div class="col-md-4">
              <a class="btn btn-lg btn-default btn-block" href="Connexion.php">Connexion / Création de compte</a>
          </div>
        </div>
  </div>
  <?php
}
?>
            <hr>


      <!-- Features Section -->
      <div class="row">
          <div class="col-lg-12">
              <h2 class="page-header">Master Class Nice 2017</h2>
          </div>
          <div class="col-md-6">
              <p>L'inscription a la Master Class 2017 de Nice comprend:</p>
              <ul>
                  <li><strong>Participation à des ateliers avec des experts</strong>
                  </li>
                  <li><strong>Partipation aux Concerts chaque soir de la semaine</strong></li>
                  <li>Partage d'experiences </li>
                  <li> Amelioration de la technique individuelle</li>
                  <li> Perfectionnement esprit de groupe</li>
                  <li> Buffet à chaque fin de concert pour echanger </li>
              </ul>
              <p>Pour tous les amateurs de jazz, qui ont envie de progresser et de s'enrichir. Tous les niveaux sont acceptés, tant que vous avez envie d'apprendre!</p>
          </div>
          <div class="col-md-6">
           <img class="img-responsive img-rounded" src="images/Nicejazz.jpg" alt="">
          </div>
      </div>
      <!-- /.row -->

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Informez-vous!
                </h1>
			</div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-sign-in"></i> Inscription</h4>
                    </div>
                    <div class="panel-body">
                        <p>Inscription aux ateliers et concert du soir pour cette MasterClass. </p>
                        <a href="creation.php" class="btn btn-default">Je m'inscris</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-graduation-cap"></i> Professeurs</h4>
                    </div>
                    <div class="panel-body">
                        <p>Présentation des différents Professeurs de cette MasterClass 2017.</p>
                        <a href="prof.php" class="btn btn-default">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-calendar"></i> Calendrier</h4>
                    </div>
                    <div class="panel-body">
                        <p>Présentation du déroulement des ateliers lors de cette semaine de MasterClass.</p>
                        <a href="programme.php" class="btn btn-default">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-music"></i> Programmation</h4>
                    </div>
                    <div class="panel-body">
                        <p>Programmation musical de chaque soirée pendant cette semaine de MasterClass.</p>
                        <a href="#" class="btn btn-default">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-file-image-o"></i> Photos</h4>
                    </div>
                    <div class="panel-body">
                        <p>Galerie de photos souvenirs des précédentes éditions. </p>
                        <a href="photo.php" class="btn btn-default">Visualiser</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Vidéos </h4>
                    </div>
                    <div class="panel-body">
                        <p>Vidéos de certain concert des années précédentes</p>
                        <a href="#" class="btn btn-default">Visualiser</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
		 <?php
          $req = $pdo->query("SELECT * FROM `photos` WHERE 1 ORDER BY annee=2015 DESC limit 6");
           ?>

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Photos </h3>
            </div>
            <?php
              while ($d = $req->fetch(PDO::FETCH_OBJ) ) {
                //if ($annee!=$d->annee){
            ?>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.php?annee=<?php echo $d->annee; ?>">
                    <img class="img-responsive img-hover img-related petiteimage " src="<?php echo  $d->chemin ?>" alt="<?php echo $d->annee; ?>">
					</br>
                </a>
            </div>

        <!-- /.row -->
        <?php
            }
            ?>
</div>

<?php
  require_once'footer.php';
 ?>
