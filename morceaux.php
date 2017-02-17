<?php
    session_start();
    require_once'header.php';

    $jour=$_GET["jour"];


    if ($jour==1)
    {
        $jour1 = 'lundi';
    }
    elseif ($jour==2)
    {
        $jour1 = 'mardi';
    }
    elseif ($jour==3)
    {
        $jour1 = 'mercredi';
    }
    elseif ($jour==4)
    {
        $jour1 = 'jeudi';
    }
    elseif ($jour==5)
    {
        $jour1 = 'vendredi';
    }
    elseif ($jour==6)
    {
        $jour1 = 'samedi';
    }
    else
    {
        $jour1 = 'dimanche';
    }



?>

<div class="container">
    <div class="row">
        <div class="section-title text-center">
            <h3>Ajout d'un morceaux pour
            <?php
            echo '';
            echo $jour1;
            ?>

            </h3>
                <form  action="creationmorceau.php?jour=<?php echo $jour1 ?>&amp;instrument=<?php echo $_SESSION['instrument'] ;?>" method="post">
                    <fieldset>
                        <legend>Veuillez renseigner tous les champs</legend> <!-- Titre du fieldset -->
                            <h5>Titre :<input placeholder="Indiquer le titre" type="text" name="titre" id="idtitre" required/></h5>
                            <h5>Artiste :<input placeholder="Indiquer l'artiste" type="text" name="artiste" id="idartiste" required/></h5>
                            <h5>
                              Vous utiliserez :<?php echo $_SESSION['instrument']; ?>
                            </h5>
                            </br>
                            <input type="submit" value="Ajouter" />
                    </fieldset>
                </form>
        </div>
    </div>

<?php
    require_once 'footer.php';
?>
