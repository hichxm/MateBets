$(document).ready(function () {

// validation du formulaire
$('#valider').on('click', function(e) {

  var mdp1 = $('#mdp').val();  // Mdp user
  var mdp2 = $('#mdp2').val();  // conf mdp user

    if(mdp1 != mdp2){
    // remise a blanc des champs
      $('#mdp').val("");
      $('#mdp2').val("");
      // ajout du style
      $('#mdp').addClass('error');
      $('#mdp2').addClass('error');

      // on sort
      e.preventDefault();
    } else{

    alert("Ok");
     $('#formulaire').submit();
}
    //si tout se passe bien on envoie le formulaire

  });

});
