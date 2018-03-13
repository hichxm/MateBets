--- Database creation ---
DROP DATABASE IF EXISTS matebets;
CREATE DATABASE matebets;
USE matebets;

-- Table creation --


-- Un GROUPE peut contenir plusieurs joueurs --
CREATE TABLE groupe(


);

-- Un JOUEUR peut faire partit de plusieurs groupes --
CREATE TABLE joueur(


);

-- Il y a UN seul POT par GROUPE --
CREATE TABLE pot(


);

-- Il peut y avoir plusieurs PARIS sur un COMBINE --
CREATE TABLE pari(


);

CREATE TABLE membre(
  idMembre int(11) auto_increment,
  nomMembre varchar(50),
  prenomMembre varchar(50),
  emailMembre varchar(50),
  loginMembre varchar(50),
  mdpMembre varchar(50),
  PRIMARY KEY (idMembre)
);
