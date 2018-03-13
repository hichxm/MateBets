<?php

class Modele{

  private $pdo;

  public function __construct($serveur, $bdd, $user, $mdp){

    $this->pdo = null;
    try{
      $this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
      // echo "Connexion réussie";
    } catch(Exception $exp){
      echo "<br /> Erreur de connexion à la base de donnée ".$bdd ."<br />";
    }
  }

  public function seConnecter($login){
    $requete = "select * from membre where loginMembre = :login";
    $donnees = array(
      ":login"=>$login
    );
    if($this->pdo != null){
    $select = $this->pdo->prepare($requete);
    $select->execute($donnees);
    $result = $select->Fetch();
    return $result;
  }
}
  public function inscription($unMembre){
    $requete = "insert into membre values(null, :nom, :prenom, :email, :login, :mdp);";
    $donnees = array(
      ":nom"=> $unMembre->getNom(),
      ":prenom"=> $unMembre->getPrenom(),
      ":email"=> $unMembre->getEmail(),
      ":login"=> $unMembre->getLogin(),
      ":mdp"=> password_hash($unMembre->getMdp(), PASSWORD_DEFAULT)
    );
    if($this->pdo != null){
    $insert = $this->pdo->prepare($requete);
    $insert->execute($donnees);
  }
  }

}
