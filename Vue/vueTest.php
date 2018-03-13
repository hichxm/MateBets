<?php

echo password_hash("test",PASSWORD_DEFAULT) . "<br />";
echo password_hash("prout",PASSWORD_DEFAULT). "<br />";

$test = '$2y$10$iIiiJAAj0QYthkhyf4ELsuZ5406oPvgCe893gB36fh2Q39cWpTKxe';

if(password_verify("prout", $test)) {
  echo "Mot de passe Ok !";
}
else{
  echo "Mauvais mdp !";
  }
?>
