<html lang="en" dir="ltr">
    <head>
    <meta name="keywords" content="informatique.... 30 mot clé  environ ">
    <meta name=  content="">
    <link rel="stylesheet" href="back-office/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/cars2.ico" />
    <meta charset="utf-8">
    <title>Accueil-back</title>
  </head>
  <body>
      
    <center><div class="color" width="100%" height="50%"><img src="back-office/image/black.png" alt="art" width="50%" height="50%"></div></center>
    
   
      
                
    <table width="100%" height="7%" bgcolor="#696047">
    <tr >
        <th><a href="accueil.html"target=_blank><font color="white">Accueil</font></a></th>
        <th><a href="ajout.html"target=_blank><font color="white">Ajouter</font></a></th>
        <th><a href="suppression.html"target=_blank><font color="white">Supprimer</font></a></th>
        <th><a href="modif.html"target=_blank><font color="white">Modifier</font></a></th>
        <th><a href="modif-article.html"target=_blank><font color="white">Modifier un article</font></a></th>
    </tr>
    </table>  </br></br>
                <center><h1>inscription</h1></center>

                <center><form method= "POST" action="inscription.php">
                        Nom   <input type="text" name="nom" size="15"  pattern="[A-Za-z]{3,}" 
                        title="3 lettres min" required>

                        prenom   <input type="text" name="prenom" size="15" pattern="[A-Za-z]{3,}" 
                        title="3 lettres min" required></br></br>

                        Ville  <input type="text" name="ville"></br></br>

                        Code postale : <input type="text" name="cp" value="" size="15" pattern="[0-9]{5}" title="5 chiffres obligatoire" required>

                        Tel  <input type="text" name="phone" size="15">

                        </br> </br>
                       Mail  <input type="email"  name="mail" placeholder=" @google.com"  
                       pattern="[A-Za-z0-9z@_-+.]" size="30" required> 
                       
                       Mdp  <input type="password"  name="pass" placeholder="8 caractère min"  
                       minlength="8" required>

                        </br> </br>
                        Confirmez Mdp  <input type="password" name="pass2" 
                        placeholder="8 caractère min"  minlength="8" required>

                        <input type="submit" value="valider">
                        
                      </form></center>
          
    
  </body>
</html>