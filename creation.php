<?php
	session_start();
    require_once'header.php';
?>



<div class="container">
    <div class="row">
        <div class="section-title text-center">
            <h3>Création d'un compte</h3>
            	<form  action="enregistrement.php" method="post" class="text-center">
                    <fieldset>
                      <legend></legend>
                            <label>Nom <input placeholder="Entrez votre Nom" class="form-control"type="text" name="nom" id="name" required/></label>
                            </br>
                            <label>Prenom <input class="form-control" placeholder="Entrez votre Prenom" type="text" name="prenom" id="idprenom" required/></label>
                            </br>
                            <label>Password <input  class="form-control" placeholder="Entrez votre mot de passe" type="password" name="pass" id="idpassword" required/> </label>
                            </br>
                            <label>Adresse Email <input class="form-control" placeholder="Entrez votre adresse mail" type="email" name="email" id="idemail" required/></label>
                            </br>
                            <label>Date de naissance <input  class="form-control" type="date" name="age" placeholder="jj/mm/aaa" /></label>
                            </br>
                            <label>Quel est votre instrument ?
                                <select  class="form-control" name="instrument" id="idinstrument">
                                   <option value="Piano">Piano</option>
                                   <option value="Batterie">Batterie</option>
                                   <option value="Trompette">Trompette</option>
                                   <option value="Saxophone">Saxophone</option>
                                   <option value="ContreBasse">ContreBasse</option>
                                   <option value="Chant">Guitare</option>
                                </select>
                                </label>
								</br>
								<label>Votre niveau ?
                                <select class="form-control" name="niveau" id="idnavette">
                                   <option value="Debutant">Débutant</option>
                                   <option value="Intermediaire">Intermediaire</option>
								   <option value="Confirme">Confirmé</option>
                                </select>
                              </label>
                                </br>
								<?php  if(isset($_SESSION['superutilisateur'])&& $_SESSION['superutilisateur']=="Oui"){?>
								<label> Compte administrateur
                                <select class="form-control" name="niveau" id="idnavette">
                                   <option value="Oui">Oui</option>
                                   <option value="Non">Non</option>
                                </select>
                              </label>
							  </br>
								<?php  }?>

                            <label>Navette Aeroport/MasterClass ?
                                <select class="form-control" name="navette" id="idnavette">
                                   <option value="Oui">Oui</option>
                                   <option value="Non">Non</option>
                                </select>
                              </label>
                            </br>
							</br></br>
                        	<input  class="" type="submit" value="Enregistrer" />
                        </br>
                        <h10>Veuillez renseigner tous les champs</h10>
                    </fieldset>
                </form>
        </div>
    </div>





<?php
    require_once 'footer.php';
?>
