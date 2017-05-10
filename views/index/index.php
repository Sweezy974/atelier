
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
      <h5>Programmation informatique pour les enfants</h5>
    </div>
    <div class="col s12 m12 l12 center">

      <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
          <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
        </div>
        <div class="carousel-item red white-text" href="#one!">
          <h2>First Panel</h2>
          <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
          <h2>Second Panel</h2>
          <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
          <h2>Third Panel</h2>
          <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
          <h2>Fourth Panel</h2>
          <p class="white-text">This is your fourth panel</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l12">
      <h5>Simplon Kids</h5>
    </div>
    <div class="col s12 m12 l12">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col l12" id="workshopList">


          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<!-- <div class="row">
<div class="container">
<div class="col s12 m12 l12 center" id="listeVehiculeAccueil">
<div class="col s12 l4">
<div class="card" style="overflow: hidden;">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator" src="views/media/img/rs6.jpg">
</div>
<div class="card-content">
<span class="card-title activator grey-text text-darken-4">Nom véhicule<i class="material-icons right">more_vert</i></span>

<p><a href="#!">Prix €</a></p>
</div>
<div class="card-reveal" style="display: none; transform: translateY(0px);">
<span class="card-title grey-text text-darken-4">Description<i class="material-icons right">close</i></span>
<p>Here is some more information about this product that is only revealed once clicked on.</p>
</div>

<div class="card-action center">
<a href="#">Réserver</a>
</div>
</div>
</div>
<div class="col s12 l4"> <div class="card" style="overflow: hidden;"> <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="views/media/img/rs6.jpg"> </div> <div class="card-content"> <span class="card-title activator grey-text text-darken-4">Nom véhicule<i class="material-icons right">more_vert</i></span> <p><a href="#!">Prix €</a></p> </div> <div class="card-reveal" style="display: none; transform: translateY(0px);"> <span class="card-title grey-text text-darken-4">Description<i class="material-icons right">close</i></span> <p>Here is some more information about this product that is only revealed once clicked on.</p> </div> <div class="card-action center"> <a href="#">Réserver</a> </div> </div> </div>
</div>
<div class="col s12 l12 center mar">
<div class="offset-l2 col l4 s12 marsmart">
<a  value="1" href="/?c=user&t=ownerIndex" class="waves-effect waves-light btn-large red col s12"><i class="material-icons left">mode_edit</i>Propriétaire</a>
</div>
<div class="offset col l4 s12 marsmart">
<a  value="2" href="/?c=user&t=tenantIndex"class="waves-effect waves-light btn-large blue col s12"><i class="material-icons left">collections_bookmark</i>Locataire</a>
</div>
</div>
</div>


</div> -->


  <div class="footer-copyright">
    <div class="container center">
      © Simplon Réunion 2017 | <a href="#"> Mentions Légales</a>
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>


</div>
<script src="views/workshop/js/index.js"></script>
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
  workshopList() ;


});

  $('.carousel.carousel-slider').carousel({fullWidth: true});


</script>
</body>
</html>
