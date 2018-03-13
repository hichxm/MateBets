<head>
  <link rel="stylesheet" href="res/css/connexion.css">
</head>

<div class="index" id="loginindex">
		<div class="badge-promo">
	     	<span class="badge-promo-content">Connexion</span>
	    </div>
		<form action="" name="loginform" method="post">
      <br />
			<div class="form-group">
				<h5><i class="fas fa-user"></i> Nom d'utilisateur :</h5>
				<input type="text" name="login" id="login" class="input form-control" title="Ce champ est requis" required>
			</div>
      <br />
			<div class="form-group">
				<h5><i class="fas fa-key"></i> Mot de passe :</h5>
				<input type="password" name="mdp" id="mdp" class="input form-control" title="Ce champ est requis" required>
			</div>
	        <input type="submit" name="connexion" class="button" id="connexion" value="Connexion" title="Se connecter" />
		</form>
	</div>
