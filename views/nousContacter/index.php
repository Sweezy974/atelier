
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
        <h5 style="font-weight:bolder;">Nous contacter</h5>
      </div>
      <div class="col s12 m6 l6">
        <div class="col s12 l6">
          <h5>Centre 1</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col s12 l6">
        <h5>Centre 2</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col s12 l6">
          <h5>Centre 3</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col s12 l6">
        <h5>Centre 4</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="col s12 m6 l6">
        <div class="input-field col l12 s12">
          <input id="nom"type="text" name="" value="">
          <label for="nom">nom</label>
        </div>
        <div class="input-field col l12 s12">
          <input id="prenom"type="text" name="" value="">
          <label for="prenom">prenom</label>
        </div>
        <div class="input-field col l12 s12">
          <input id="mail"type="email" name="" value="">
          <label for="mail">mail</label>
        </div>
        <div class="input-field col l12 s12">
          <input id="sujet"type="text" name="" value="">
          <label for="sujet">sujet</label>
        </div>
        <div class="input-field col l12 s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
      <div class="col s12 m12 l12 center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1355.7270850850132!2d55.6575465488941!3d-20.976097705186824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21787d582ee3f92b%3A0x97e959a661b3f3de!2sEspace+culturel+et+%C3%A9ducatif+Pierre+Roselli!5e0!3m2!1sfr!2sfr!4v1494327421546" style="width:100%!important;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
