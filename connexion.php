<?php
require_once'header.php';
?>

 <div class="container">
                                    <div class="row">
                                        <div class="section-title text-center">
                                            <h3>Identification</h3>
                                            <form method="post" action="connexion2.php">
                                                <fieldset>
                                                    <legend></legend> <!-- Titre du fieldset -->
                                                        <label>Votre Email :<input placeholder="Entrez votre email"  class="form-control" type="email" name="email" id="email" required/></label>
                                                          </br>
                                                        <label>Password :<input placeholder="Entrez votre Password"  class="form-control" type="password" name="pass" id="pass" required/></label>
                                                          </br>
                                                    <input type="submit" value="Connexion" />
                                                  </br>
                                                  <h10>Veuillez renseigner tous les champs</h10>
                                                </fieldset>
                                            </form>
                                        </br>
                                        <h5><a href="creation.php">Je n'ai pas de compte</a></h5>
                                        </div>
                                    </div>
									</br></br>
                                

<?php
  require_once'footer.php';
 ?>
