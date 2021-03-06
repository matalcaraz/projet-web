
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master Classe - Nice 2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Add fancyBox -->
<link rel="stylesheet" href="fancy/jquery.fancybox.css" type="text/css" media="screen" />
        <link href="css/main.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Master Class</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
				<?php  if(isset($_SESSION['superutilisateur'])&& $_SESSION['superutilisateur']=="Oui"){?>
                    <li>
                        <a href="services.php">Ajouts Photos</a>
                    </li>
					<?php }?>
                    <li>
                        <a href="prof.php">Professeurs</a>
                    </li>
                    <li>
                        <a href="programme.php">Programme </a>
                    </li>
					<li>
                        <a href="calendrier.php">Concerts </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Photos/Videos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="photo.php">Galerie photos</a>
                            </li>
                            <li>
                                <a href="video.php">Vidéos </a>
                            </li>
                        </ul>
                    </li>
                     <?php
          if(isset($_SESSION['nom'])) {
          ?>
<li>
                        <a href="deconnexion.php">Se déconnecter</a>
                    </li>
  <?php
}
?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <?php
$pdo = new PDO('mysql:host=localhost;dbname=masterclass', 'root', '');
   ?>
