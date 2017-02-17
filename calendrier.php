<?php
    session_start();
    require_once'header.php';
?>


        <!-- Début Concerts Section -->
      
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
				   <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nos concerts
                    <small>Programme de chaque soir de la semaine</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li class="active">Programmation concerts</li>
                </ol>
            </div>
        </div>
		<div class="row">
           
						<div class="col-lg-12">
                        <div class="section-title page-header text-center">
                            <h2>Notre programme</h2>
                            <p>Chaque jour de la semaine vous allez assister à un cours en groupe réduit avec votre professeurs, puis dans l'aprés-midi des ateliers serons mis en place pour vous!</p>
                        </div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center">Lundi   <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='lundi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;
                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>


                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=1" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php } ?>
								</div>
                                
                            <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center"> Mardi <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='mardi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>
                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=2" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php } ?>
                                </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center"> Mercredi <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='mercredi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>

                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=3" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php }?>
									</br></br></br>
                                </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center">Jeudi <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='jeudi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>

                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=4" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php }?>
                                </div>
                          <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center"> Vendredi <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='vendredi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>

                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=5" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php }?>
                                </div>
                           <div class="col-md-4 col-sm-6 col-xs-12 text-center">              
                            <h3 class="text-center"> Samedi <i class="fa fa-calendar"></i></h3>
                                    <p>
                                    <?php
                                    $sql = "SELECT `artiste`,`titre` FROM `morceaux` WHERE `jour`='samedi'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $Utilisateur = $resultat;
                                        $_SESSION['artiste'] = $Utilisateur->artiste;
                                        $_SESSION['titre'] = $Utilisateur->titre;

                                    ?>
									<?php if(isset($_SESSION['nom'])){?>
                                        <a href="rajoute.php?artiste=<?php echo $_SESSION['artiste']?>&amp;titre=<?php echo $_SESSION['titre']?>">
                                    <?php
									}?> <i class="fa fa-music" ></i>
									<?php
                                        echo $_SESSION['artiste'];
                                        echo ' - ';
                                        echo $_SESSION['titre'];
                                        echo '<br>';
                                    ?>
                                        </a>
                                    <?php


                                    }
                                    $req->closeCursor();
                                    ?>

                                    </p>
									<?php if(isset($_SESSION['nom'])){?>
                                    <div class="plan-signup">
                                        <a href="morceaux.php?jour=6" class="btn-system btn-small">Ajoute ton morçeau</a>
                                    </div>
									<?php }?>
                                </div>
                            </div>
							</br></br>
                           </br>
                       
                   

        <!-- Fin Concerts Section -->

<?php
    require_once 'footer.php';
?>
