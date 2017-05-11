
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
        <h5>Créé atelier :</h5>
      </div>
      <!-- <div class="col s12 m12 l12"> -->
      <div class="input-field col s12 m12 l12 center">
        <input id="nom"class="center"type="text" name="" value="">
        <label class="center"for="nom">Nom de l'atelier</label>

      </div>
      <div class="input-field col l12 s12">
        <textarea id="description" class="materialize-textarea"></textarea>
        <label for="description">description</label>
      </div>
        <div class="input-field col s12 m12 l4">
          <p style="color:grey;">Type</p>

          <select id="categoryList" class="browser-default" >
            <option value="" disabled selected id="">Choisissez une catégorie</option>
            <!-- <option value=""selected>n</option> -->

          </select>
        </div>
        <div class="input-field col s12 m12 l4">
          <p style="color:grey;">Tranche d'âge</p>

          <select id="ageList" class="browser-default" >
            <option value="" disabled selected id="">Choisissez une tranche d'age</option>
            <!-- <option value=""selected>n</option> -->

          </select>
        </div>
        <div class="input-field col s12 m12 l4">
          <p style="color:grey;">Etablissement</p>

          <select id="establishmentList" class="browser-default" >
            <option value="" disabled selected id="">Choisissez un établissement</option>
            <!-- <option value=""selected>n</option> -->

          </select>
        </div>
        <div class="input-field col s12 m12 offset-l2 l4 center" style="margin-top:20px;margin-bottom:10px;">
          <p class="center"for="d" style="color:grey;"> date de début</p>
          <input id="dateDebut"class="center"type="date" name="" value="">

        </div>
        <div class="input-field col s12 m12  l4 center" style="margin-top:20px;margin-bottom:10px;">
          <p class="center"for="d" style="color:grey;"> date de fin</p>
          <input id="dateFin"class="center"type="date" name="" value="">

        </div>
        <div class="input-field col offset-l4 l4 offset-s4 s4 offset-m4 m4 center" style="margin-top:20px;margin-bottom:10px;">
          <input id="maxEnfant"class="center"type="number" name="" value="">
          <label class="center"for="maxEnfant">Nombre max d'enfant</label>

        </div>
        <div class="input-field col offset-l4 l4 offset-s4 s4 offset-m4 m4 center" style="margin-top:20px;margin-bottom:10px;">
          <input id="prix"class="center"type="number" name="" value="">
          <label class="center"for="prix">Prix en €</label>

        </div>
        <div class="col s12 m12 l12 center">
          <a onclick="workshopCreate()" class="btn " style="margin-top:20px;">Créé un atelier</a>
        </div>
      <!-- </div> -->

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
<script src="views/workshop/create/js/create.js"></script>
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
  workshopType() ;


  $('select').material_select();

});

$('.carousel.carousel-slider').carousel({fullWidth: true});

  $('#textarea1').trigger('autoresize');
</script>
</body>
</html>
