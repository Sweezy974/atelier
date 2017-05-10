<script type="text/javascript">
$('.button-collapse').sideNav({
  menuWidth: 300, // Default is 300
  edge: 'right', // Choose the horizontal origin
  closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
  draggable: true // Choose whether you can drag to open on touch screens
}
);
</script>
<div class="navbar-fixed">
  <nav class="blue lighten-1">
    <div class="container">
      <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse" style="padding-:20px;"><i class="material-icons">menu</i></a>
        <!-- <ul id="nav-mobile" class="right ">
        <li><a href="page.php?id=8"><span class="new red badge">0</span></a></li>
      </ul> -->
      <a href="/" class="brand-logo uppercase">Simplon Réunion</a>
      <!-- navbar for small devices -->
      <ul class="right hide-on-med-and-down ">
        <li><a href="/?c=workshop&t=Index">Ateliers</a></li>
        <li><a href="/?c=user&t=register">Inscrire</a></li>
        <li><a href="/?c=faq&t=Index">FAQ</a></li>
        <li><a href="/?c=nousContacter&t=Index">Contact</a></li>

      </ul>




    </div>
  </div>
</nav>
</div>


<ul id="slide-out" class="side-nav">
  <li><a href="/"><i class="material-icons">cloud</i>Accueil</a></li>
  <li><a href="/?c=workshop&t=Index"><i class="material-icons">cloud</i>Ateliers</a></li>
  <li><a href="/?c=user&t=register"><i class="material-icons">cloud</i>Inscrire</a></li>
  <li><a href="/?c=faq&t=Index"><i class="material-icons">cloud</i>FAQ</a></li>
  <li><a href="/?c=nousContacter&t=Index"><i class="material-icons">cloud</i>Contact</a></li>

</ul>
<!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a -->
