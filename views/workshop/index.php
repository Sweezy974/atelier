
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
        <h5>Trier par :</h5>
      </div>
      <div class="col s12 m12 l12">
        <div class="input-field col s12 m4 l4">
          <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Tranches d'âges </label>
        </div>
        <div class="input-field col s12 m4 l4">
          <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Catégorie</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Lieu </label>
        </div>
      </div>
      <div class="col s12 m12 l12" id="workshopList">

        <!-- <div class="col s12 m4 l3">
          <div class="card" style="overflow: hidden;">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="views/media/img/atelier-interieur.jpg">
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p><a href="#!">Prix €</a></p>
            </div>
            <div class="card-action center"> <a href="#">Inscription</a> </div> </div>
          </div>
          <div class="col s12 m4 l3">
            <div class="card" style="overflow: hidden;">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="views/media/img/atelier-interieur.jpg">
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p><a href="#!">Prix €</a></p>
              </div>
              <div class="card-action center"> <a href="#">Inscription</a> </div> </div>
            </div>
            <div class="col s12 m4 l3">
              <div class="card" style="overflow: hidden;">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="views/media/img/atelier-interieur.jpg">
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p><a href="#!">Prix €</a></p>
                </div>
                <div class="card-action center"> <a href="#">Inscription</a> </div> </div>
              </div>
              <div class="col s12 m4 l3">
                <div class="card" style="overflow: hidden;">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="views/media/img/atelier-interieur.jpg">
                  </div>
                  <div class="card-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a href="#!">Prix €</a></p>
                  </div>
                  <div class="card-action center"> <a href="#">Inscription</a> </div> </div>
                </div> -->
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


  $('select').material_select();

});

$('.carousel.carousel-slider').carousel({fullWidth: true});


</script>
</body>
</html>
