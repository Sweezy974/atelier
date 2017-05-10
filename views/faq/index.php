
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
      <h6>Programmation informatique pour les enfants</h6>
    </div>
    <div class="col s12 m12 l12">
      <h5 style="font-weight:bolder;">FAQ</h5>
    </div>
    <div class="col s12 m12 l12">
      <h5>QUESTION 1</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col s12 m12 l12">
      <h5>QUESTION 2</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col s12 m12 l12">
      <h5>QUESTION 3</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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


</script>
</body>
</html>
