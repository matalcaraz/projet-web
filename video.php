<?php
session_start();
  require_once'header.php';

  $annee="2016";

  ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Photo
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li class="active">Portfolio Item</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">


            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active "></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
						<div class="item active">
						<object class="textCenter img-responsive">
						<param name="movie" value="http://www.youtube.com/v/_etwz7NkemE&hl=fr"></param>
						<param name="wmode" value="transparent"></param>
						<embed src="http://www.youtube.com/v/_etwz7NkemE&hl=fr" type="application/x-shockwave-flash" wmode="transparent" width="625" height="455"></embed>
						</object>

						    </div>
						<div class="item ">
						<object class="textCenter img-responsive">
						<param name="movie" value="http://www.youtube.com/v/_etwz7NkemE&hl=fr"></param>
						<param name="wmode" value="transparent"></param>
						<embed src="http://www.youtube.com/v/_etwz7NkemE&hl=fr" type="application/x-shockwave-flash" wmode="transparent" width="625" height="455"></embed>
						</object>
						    </div>
                    </div>



                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>





        </div>
        <!-- /.row -->

        <?php
          $req = $pdo->query("SELECT count(*) as nombreImage, annee,chemin FROM `photos` WHERE annee!=$annee group by annee ORDER BY annee DESC limit 4");
           ?>

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Photos des autres années </h3>
            </div>
            <?php
              while ($d = $req->fetch(PDO::FETCH_OBJ) ) {
            ?>
            <div class="col-sm-3 col-xs-6">
                <a href="portfolio-item.php?annee=<?php echo $d->annee; ?>">
                    <img class="img-responsive img-hover img-related petiteimage " src="<?php echo  $d->chemin ?>" alt="<?php echo $d->annee; ?>">
                </a>
                <div class="row">
                  <h2 class="textCenter"><?php echo $d->annee; ?></h2>
                </div>
            </div>

        <!-- /.row -->
        <?php
          //}
            }
            ?>
</div>
            <?php
          require_once'footer.php';
          ?>
