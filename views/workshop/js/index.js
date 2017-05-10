function workshopList() {
  $('#vehicleList').html("");
  var idp = $('#id_page').val();
  $.ajax({
    type: 'POST',
    url: 'models/Workshop.php',
    dataType: 'json',
    data: {
      id_page: idp

    },
    success: function (data) {
      // alert('ddd');


      for (i = 0; i < data.price.length; i++) {
        $('#workshopList').append('<div class="col s12 m4 l3"> <div class="card" style="overflow: hidden;"> <div class="card-image waves-effect waves-block waves-light"> <img class="activator" src="views/media/img/'+data.image[i]+'"> </div> <div class="card-content"> <p style="font-weight:bolder;">'+data.title[i]+'<p></br><p>'+data.description[i]+'</p> <p><a href="#!">'+data.price[i]+' €</a></p> </div> <div class="card-action center"> <a href="#">Inscription</a> </div> </div> </div>');

      }



    }

  });
}
