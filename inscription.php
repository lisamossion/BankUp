<?php
//Démarrage de la session
    session_start();
    $_SESSION['connexion']='';
    include('menu.php');
?>
<!--
<!DOCTYPE HTML>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="code.css" />
    </head>

    <header>
        
    </header>

    <body>
        <div>
        <form method="post" action="traitement.php">
            <fieldset>
            <legend>Créer votre profil</legend>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><label for="civilite">Civilité</label> :</td>
                        <td>
                            <input type="radio" name="civilite" value="madame" id="madame" />
                            <label for="madame">Mme</label>
                            <input type="radio" name="civilite" value="monsieur" id="monsieur" />
                            <label for="monsieur">M.</label>
                        </td> 
                    </tr>
                    <tr>   
                        <td><label for="nom">Nom</label> :</td>
                        <td><input type="text" name="nom" id="nom" size="20" minlength="2" maxlength="25" placeholder="Nom" autofocus /></td>   
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label> :</td>
                        <td><input type="text" name="prenom" id="prenom" size="20" minlength="2" maxlength="25" placeholder="Prénom" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="date_Naissance">Date de naissance</label></td>
                        <td><input type="date" name="date_Naissance" id="date_Naissance"/></td>
                    </tr>
                    <tr>
                        <td><label for="pays">Choisissez un Pays :</label></td>
                        <td><select name="pays" id="pays">
                                <?php
                                    $id_fichier= fopen("liste_pays.txt","r");
                                    while($ligne=fgets($id_fichier,1024))
                                    {
                                        $ligne=explode(chr(9),$ligne);
                                        if ($ligne[1]=='France') // France est sélectionné par défaut
                                        print '<option value='.$ligne[0].' selected="selected">'.$ligne[1].'</option>';
                                        else
                                        print '<option value='.$ligne[0].'>'.$ligne[1].'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="adresse_Postale">Adresse postale</label> :</td>
                        <td>
                            <label for="numero_Voie">n°</label> :
                            <input type="text" name="numero_Voie" id="numero_Voie" size="5" minlength="0" maxlength="5" placeholder="25" autofocus/>
                            <label for="voie">Voie</label> :
                            <input type="textarea" name="voie" id="voie" rows="10" cols="50" size="75" minlength="" maxlength="75" placeholder="rue Solférino" autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <label for="code_Postal">Code postal</label> :
                            <input type="text" name="code_Postal" id="code_Postal" size="5" minlength="5" maxlength="5" placeholder="75116" autofocus/>
                            <label for="ville">Ville</label> :
                            <input type="text" name="ville" id="ville" size="10" minlength="5" maxlength="25" placeholder="Paris 16e" autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Adresse mail</label> :</td>
                        <td><input type="email" name="email" id="email" size="50" minlength="5" maxlength="70" placeholder="exemple@adresse.fr" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="email">Confirmation adresse mail</label> :</td>
                        <td><input type="email" name="email" id="email" size="50" minlength="5" maxlength="70" placeholder="exemple@adresse.fr" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="telephone">Téléphone</label> :</td>
                        <td><input type="email" name="telephone" id="telephone" size="10" minlength="10" maxlength="10" placeholder="06XXXXXXXX" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de passe</label> :</td>
                        <td>
                            <a href="#" alt="Please enter mdp" class="tooltipDemo">
                                <input type="password" name="mdp" id="mdp" size="30" minlength="5" maxlength="30" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="confirmation_Mdp">Confirmation mot de passe</label> :</td>
                        <td><input type="password" name="confirmation_Mdp" id="confirmation_Mdp" size="30" minlength="5" maxlength="30" /></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Envoyer" />
        </form>
        </div>

    </body>


    <footer>
        <div></div>
    </footer>

</html>
-->
 <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Créer votre profil</h1>
    <p>Merci de compléter les informations ci-dessous.</p>
    <hr>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><label for="civilite">Civilité*</label> :</td>
                        <td id="civilite">
                            <input type="radio" name="civilite" value="madame" id="madame" />
                            <label for="madame">Mme</label>
                            <input type="radio" name="civilite" value="monsieur" id="monsieur" />
                            <label for="monsieur">M.</label>
                        </td> 
                    </tr>
                    <tr>   
                        <td><label for="nom">Nom</label> :</td>
                        <td><input type="text" name="nom" id="nom" size="20" minlength="2" maxlength="25" placeholder="Entrez votre nom" autofocus /></td>   
                    </tr>
                    <tr>
                        <td><label for="prenom">Prénom</label> :</td>
                        <td><input type="text" name="prenom" id="prenom" size="20" minlength="2" maxlength="25" placeholder="Entrez votre prénom" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="date_Naissance">Date de naissance</label> :</td>
                        <td><input type="date" name="date_Naissance" id="date_Naissance"/></td>
                    </tr>
                    <tr>
                        <td><label for="pays">Choisissez un Pays :</label></td>
                        <td><select name="pays" id="pays">
                                <?php
                                    $id_fichier= fopen("liste_pays.txt","r");
                                    while($ligne=fgets($id_fichier,1024))
                                    {
                                        $ligne=explode(chr(9),$ligne);
                                        if ($ligne[1]=='France') // France est sélectionné par défaut
                                        print '<option value='.$ligne[0].' selected="selected">'.$ligne[1].'</option>';
                                        else
                                        print '<option value='.$ligne[0].'>'.$ligne[1].'</option>';
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="adresse_Postale">Adresse postale</label> :</td>
                        <td>
                            <label for="numero_Voie">N° de voie</label> :
                            <input type="text" name="numero_Voie" id="numero_Voie" size="5" minlength="0" maxlength="5" placeholder="Entrez votre n° voie" autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <label for="voie">Voie</label> :
                            <input type="text" name="voie" id="voie" size="75" minlength="" maxlength="75" placeholder="Entrez votre voie" autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>    
                            <label for="code_Postal">Code postal</label> :
                            <input type="text" name="code_Postal" id="code_Postal" size="5" minlength="5" maxlength="5" placeholder="Entrez votre code postal" autofocus/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <label for="ville">Ville</label> :
                            <input type="text" name="ville" id="ville" size="10" minlength="5" maxlength="25" placeholder="Entrez votre ville" autofocus/>
                        </td>
                    </tr>

                    </tr>
                    <tr>
                        <td><label for="email">Adresse mail</label> :</td>
                        <td><input type="email" name="email" id="email" size="50" minlength="5" maxlength="70" placeholder="Entrez votre adresse mail" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="email">Confirmation adresse mail</label> :</td>
                        <td><input type="email" name="email" id="email" size="50" minlength="5" maxlength="70" placeholder="Entrez à nouveau votre adresse mail" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="telephone">Téléphone</label> :</td>
                        <td><input type="email" name="telephone" id="telephone" size="10" minlength="10" maxlength="10" placeholder="06XXXXXXXX" autofocus /></td>
                    </tr>
                    <tr>
                        <td><label for="mdp">Mot de passe</label> :</td>
                        <td>
                            <a href="#" alt="Please enter mdp" class="tooltipDemo">
                                <input type="password" name="mdp" id="mdp" size="30" minlength="5" maxlength="30" placeholder="Entrez votre mot de passe" />
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="confirmation_Mdp">Confirmation mot de passe</label> :</td>
                        <td><input type="password" name="confirmation_Mdp" id="confirmation_Mdp" size="30" minlength="5" maxlength="30" /></td>
                    </tr>
                </table>

    



    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Mot de passe</b></label> :
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 