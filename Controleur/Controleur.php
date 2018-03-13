<?php
include ("Modele/modele.php");

class Controleur{

  private $unModele;

  public function __construct($serveur, $bdd, $user, $mdp){
      $this->unModele = new Modele($serveur, $bdd, $user, $mdp);
  }

  public function seConnecter($login){
    return $this->unModele->seConnecter($login);
  }

  public function inscription($unMembre){
    $this->unModele->inscription($unMembre);
  }
}
