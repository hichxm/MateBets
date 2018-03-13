<?php
include ('Controleur/controleur.php');
include ('Controleur/membre.class.php');
include ('conf/conf.php');
?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- <link rel="stylesheet" href="res/css/style.css"> -->
    <title>MateBets - Le site de Pari entre amis !</title>
  </head>
  <body>
    <?php
      $page = isset($_GET['page']) ? $_GET['page'] : "" ;
      $unControleur = new Controleur(DB_HOST, DB_NAME, DB_USER, DB_PASS);

      switch($page){

        case "":
          echo "test";
          break;

        case 1:
          include ('Vue/vueInscription.php');
          if(isset($_POST['action'])){
            if($_POST['mdp'] == $_POST['mdp2']){

              $unMembre = new Membre();
              $unMembre->renseigner($_POST);
              $unControleur->inscription($unMembre);
            }
              else {
                  // Faire alerte mdp
              }
            }
            break;

        case 2:
        $connexion = false;
        include ('Vue/vueConnexion.php');
        if(isset($_POST['connexion'])){

          $resultat = $unControleur->seConnecter($_POST['login']);

        // Check si une ligne est retournée lors du check via Login
          if($resultat != null){
            if(password_verify($_POST['mdp'], $resultat['mdpMembre']))
            {
              echo "Connexion réussie !" . "<br />";
              $connexion = true;
            } else{
              echo "Mauvais mdp !"; // A modifier par Login/Mdp (question de sécurité)
            }
          } else{
            echo "Mauvais login"; // A modifier par Login/Mdp (question de sécurité)
          }
        }

        if($connexion == true){
          // Envoyer vers page une fois connecté
          echo "Connecté !";
        }
        break;


    }
     ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
