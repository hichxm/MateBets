<?php

Class Membre{
    private $nom, $prenom, $email, $login, $mdp;

    public function __construct(){
      $this->nom = "";
      $this->prenom = "";
      $this->email = "";
      $this->login = "";
      $this->mdp = "";
    }

    public function renseigner($tab){
      $this->nom = $tab['nom'];
      $this->prenom = $tab['prenom'];
      $this->email = $tab['email'];
      $this->login = $tab['login'];
      $this->mdp = $tab['mdp'];
    }

    public function getNom(){
      return $this->nom;
    }
    public function getPrenom(){
      return $this->prenom;
    }
    public function getEmail(){
      return $this->email;
    }

    public function getLogin(){
      return $this->login;
    }

    public function getMdp(){
      return $this->mdp;
    }

    public function setNom($nom){
      $this->nom = $nom;
    }
    public function setPrenom($prenom){
      $this->prenom = $prenom;
    }
    public function setEmail($email){
      $this->email = $email;
    }
}

?>
