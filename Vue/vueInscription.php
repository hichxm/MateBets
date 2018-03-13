<head>
  <link rel="stylesheet" href="res/css/inscription.css">
  <script type="text/javascript" src="res/js/control-form.js"></script>
</head>

<div class="index" id="loginindex">
		<div class="badge-promo">
	     	<span class="badge-promo-content">Inscription</span>
	    </div>
		<form action="" id="formulaire" method="post">
      <br />
			<div class="form-group test">
				<h5><i class="fas fa-user"></i> Nom d'utilisateur :</h5>
				<input type="text" name="login" id="login" class="input form-control" title="Ce champ est requis" required>
			</div>
      <!-- <br /> -->
      <div class="form-group test">
				<h5><i class="fas fa-envelope"></i> Email :</h5>
				<input type="email" name="email" id="email" class="input form-control" title="Ce champ est requis" required>
			</div>
      <!-- <br /> -->
      <div class="form-group test">
				<h5><i class="far fa-id-card"></i> Nom :</h5>
				<input type="text" name="nom" id="nom" class="input form-control" title="Ce champ est requis" required>
			</div>
      <!-- <br /> -->
      <div class="form-group test">
				<h5><i class="far fa-id-card"></i> Prenom :</h5>
				<input type="text" name="prenom" id="prenom" class="input form-control" title="Ce champ est requis" required>
			</div>
      <!-- <br /> -->
			<div class="form-group test">
				<h5><i class="fas fa-key"></i> Mot de passe :</h5>
				<input type="password" name="mdp" id="mdp" class="input form-control" title="Ce champ est requis" required>
			</div>

      <div class="form-group">
				<h5><i class="fas fa-key"></i> Confirmer :</h5>
				<input type="password" name="mdp2" id="mdp2" class="input form-control" title="Ce champ est requis" required>
			</div>
      <input type="hidden" name="action" id="action">
	        <!-- <input type="submit" name="valider" class="button" id="valider" value="Inscription" title="S'inscrire" /> -->
		</form>
          <button  class="button" type="submit" name="valider" id="valider">INSCRIPTION</button>
	</div>
