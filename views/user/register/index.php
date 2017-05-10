
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Simplon Réunion</title>
  <link rel="stylesheet" href="views/media/css/materialize.min.css">
  <!-- Materialize Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewsport" content="width=device-width, initial-scale=1.0">
  <!-- style -->
  <link rel="stylesheet" href="views/media/css/main.css">
</head>
<body>
  <!-- NAVBAR -->
  <?php include_once('views/navbar/index.php'); ?>

  <div class="row">
    <div class="container">
      <div class="col s12 m12 l12">
        <h5 style="font-weight:bolder;">Inscrire ses enfants</h5>
      </div>
      <div class="col s12 m12 l12">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col s12 l12">

      <div class="col s12 m6 l6">
        <div class="input-field col l12">
          <input id="nom"type="text" name="" value="">
          <label for="nom">nom</label>
        </div>
        <div class="input-field col l12">
          <input id="prenom"type="text" name="" value="">
          <label for="prenom">prenom</label>
        </div>
        <div class="input-field col l12">
          <input id="mail"type="email" name="" value="">
          <label for="mail">mail</label>
        </div>
        <div class="input-field col l12">
          <input id="adresse"type="text" name="" value="">
          <label for="adresse">adresse</label>
        </div>
        <div class="input-field col l12">
          <input id="complement"type="text" name="" value="">
          <label for="complement">complément d'adresse</label>
        </div>
        <div class="input-field col l6">
          <input id="ville"type="text" name="" value="">
          <label for="ville">ville</label>
        </div>
        <div class="input-field col l6">
          <input id="cp"type="text" name="" value="">
          <label for="cp">code postal</label>
        </div>
        <div class="input-field col l12">
          <input id="tel"type="text" name="" value="">
          <label for="tel">telephone</label>
        </div>

      </div>
      <div class="col l6 s12">
        <img height="550"src="views/media/img/atelier-interieur2.jpg" alt="">

      </div>
    </div>
    <div class="col s12 l12">


      <div class="col l6">
        <div class="col s12 l12">
          <p style="font-weight:bolder">Enfant 1</p>
        </div>
        <div class="input-field col l12">
          <input id="nomEnfant1"type="text" name="" value="">
          <label for="nomEnfant1">nom enfant</label>
        </div>
        <div class="input-field col l12">
          <input id="prenomEnfant1"type="text" name="" value="">
          <label for="prenomEnfant1">prenom enfant</label>
        </div>
        <div class="input-field col l12">
          <input id="dateEnfant1"type="date" name="" value="">
        </div>
        <div class="input-field col l12">
          <input id="classeEnfant1"type="text" name="" value="">
          <label for="classeEnfant1">classe</label>
        </div>
      </div>
      <div class="col l6">
        <div class="col s12 l12">
          <p style="font-weight:bolder">Enfant 2</p>
        </div>
        <div class="input-field col l12">
          <input id="nomEnfant2"type="text" name="" value="">
          <label for="nomEnfant2">nom enfant</label>
        </div>
        <div class="input-field col l12">
          <input id="prenomEnfant2"type="text" name="" value="">
          <label for="prenomEnfant2">prenom enfant</label>
        </div>
        <div class="input-field col l12">
          <input class="datepicker" id="dateEnfant2"type="date" name="" value="">
        </div>
        <div class="input-field col l12">
          <input id="classeEnfant2"type="text" name="" value="">
          <label for="classeEnfant2">classe</label>
        </div>
      </div>
      <div class="col s12 m12 l12 center">
        <a href="#" class="btn btn-flat blue">Inscrire</a>
      </div>

    </div>
    </div>
  </div>

</div>

</div>
</div>



<div class="footer-copyright">
  <div class="container center">
    © Simplon Réunion 2017 | <a href="#"> Mentions Légales</a>
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
  </div>
</div>


</div>
<script src="views/index/js/index.js"></script>
<script src="views/media/js/jquery-3.1.0.min.js" charset="utf-8"></script>
<script src="views/media/js/materialize.js" charset="utf-8"></script>
<script type="text/javascript">
// Initialize collapse button
$('.button-collapse').sideNav({
  menuWidth: 250, // Default is 240
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
}
);

// Initialize collapsible (uncomment the line below if you use the dropdown variation)
$('.collapsible').collapsible();

$(document).ready(function(){
  // we call the function
  indexVehicleList() ;


});

$('.carousel.carousel-slider').carousel({fullWidth: true});
$('#textarea1').trigger('autoresize');

</script>
</body>
</html>
