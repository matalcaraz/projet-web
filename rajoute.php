<?php
    session_start();
    require_once'header.php';

$artiste=$_GET["artiste"];
$titre=$_GET["titre"];
$instrument=$_SESSION['instrument'];
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
                            <h2>Vous voulez intégrer l'orchestre pour jouer ce morceau :</h2>
                            <h3>
                            <?php
                                echo $artiste;
                                echo ' - ';
                                echo $titre;
                                    $sql = "SELECT `piano`,`guitare`,`batterie`,`trompette`,`saxophone`,`contrebasse` FROM `morceaux` WHERE `titre`='$titre'";
                                    $req = $pdo->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

                                    $req->setFetchMode(PDO::FETCH_OBJ);
                                    while( $resultat = $req->fetch() )
                                    {
                                        $Utilisateur = $resultat;
                                        $_SESSION['piano'] = $Utilisateur->piano;
                                        $_SESSION['guitare'] = $Utilisateur->guitare;
                                        $_SESSION['batterie'] = $Utilisateur->batterie;
                                        $_SESSION['trompette'] = $Utilisateur->trompette;
                                        $_SESSION['saxophone'] = $Utilisateur->saxophone;
                                        $_SESSION['contrebasse'] = $Utilisateur->contrebasse;
                                       
                                    }
                            ?>
                            </h3>                           
                                <?php
                                        if($_SESSION['piano']=='Null')
                                        {  $piano=0;}                else $piano=1;
                                        if($_SESSION['guitare']=='Null')
                                        {  $guitare=0;}                else $guitare=1;
                                        if($_SESSION['batterie']=='Null')
                                        {  $batterie=0;}                else $batterie=1;
                                        if($_SESSION['trompette']=='Null')
                                        {  $trompette=0;}                else $trompette=1;
                                        if($_SESSION['saxophone']=='Null')
                                        {  $saxophone=0;}                else $saxophone=1;
                                        if($_SESSION['contrebasse']=='Null')
                                        {  $contrebasse=0;}                else $contrebasse=1;
										if($instrument=="Piano"&& $piano==1)
										{$instrument=1;}
									if($instrument=="Guitare"&& $guitare==1)
										{$instrument=1;}
									if($instrument=="Batterie"&& $batterie==1)
										{$instrument=1;}
									if($instrument=="Trompette"&& $trompette==1)
										{$instrument=1;}
									if($instrument=="ContreBasse"&& $contrebasse==1)
										{$instrument=1;}
									if($instrument=="Saxophone"&& $saxophone==1)
										{$instrument=1;}
                                ?>
								<?php if($instrument==0){?>
                            <form  action="rajoute2.php?instrument=<?php echo $_SESSION['instrument']; ?>&amp;titre=<?php echo $titre ?>" method="post"> <?php }else{?>
							<form  action="Calendrier.php" method="post"> <?php }?>
                                
                    <fieldset>
                        <legend>Voici les instruments encore disponibles :</legend>  
                            
                            <h5>
                                    <label>Guitare </label> &nbsp; <input type="checkbox" name="instrument"  value="guitare" id="idchant" disabled <?php if($guitare==1){  ?> checked  <?php } ?>/> &nbsp;&nbsp;&nbsp;
                                    <label>Piano </label> &nbsp;<input type="checkbox" name="instrument"  value="Piano" id="idpiano" disabled <?php if($piano==1){  ?> checked  <?php } ?> />&nbsp;&nbsp;&nbsp;
                                    <label>Batterie</label>&nbsp; <input type="checkbox" name="instrument"  value="Batterie" id="idbatterie" disabled <?php if($batterie==1) {  ?> checked <?php } ?> /> &nbsp;&nbsp;&nbsp;
                                    <label>Trompette</label> &nbsp;<input type="checkbox" name="instrument"  value="Trompette" id="idtrompette" disabled <?php if($trompette==1){  ?> checked  <?php } ?> />&nbsp;&nbsp; &nbsp;
                                    <label>Saxophone</label> &nbsp;<input type="checkbox" name="instrument"  value="Saxophone" id="idsaxophone" disabled <?php  if($saxophone==1) {  ?> checked  <?php } ?> />&nbsp;&nbsp;&nbsp;
                                    <label>ContreBasse</label> &nbsp;<input type="checkbox" name="instrument"  value="Contrebasse" id="idcontreBasse" disabled <?php  if($contrebasse==1) {  ?> checked  /> 
                                    <?php } ?>
                            </h5>
                            </br>
							</br>
							</br>
							<?php if($instrument==0){?>
                            <input type="submit" value=" S'inscrire en <?php echo $_SESSION['instrument']; ?>  " /> <?php }else{?>
							<input type="submit" value="Retour au calendrier" /></br> </br> Votre instrument est deja representer dans ce morceau <?php }?>
                    </fieldset>
                </form>
                                
                        </div>
                    </div>
                </div>
</div>



<?php 
    require_once 'footer.php';
?>