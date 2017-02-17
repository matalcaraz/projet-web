<?php
session_start();
  require_once'header.php';
  $req = $pdo->query("SELECT count(*) as nombreImage, annee,chemin FROM `photos` WHERE 1 group by annee ORDER BY annee DESC");
  ?>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Galerie 
                    <small>Photos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li class="active">Galerie photo</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
<?php
  while ($d = $req->fetch(PDO::FETCH_OBJ) ) {
?>
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.php?annee=<?php echo $d->annee; ?>">
                    <img class="img-responsive img-hover" src="<?php echo  $d->chemin ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3><?php echo $d->annee; ?></h3>
                <h4><?php echo $d->nombreImage; ?> Photos</h4>
                <p>&nbsp;</p>
                <a class="btn btn-primary" href="portfolio-item.php?annee=<?php echo $d->annee; ?>">Voir les <?php echo $d->nombreImage; ?> photos</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<?php
}
?>




        <?php
          require_once'footer.php';
          ?>
