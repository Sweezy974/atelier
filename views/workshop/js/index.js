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
        $('#workshopList').append('<div class="col s12 m4 l3" id="#delete"  value="'+data.id[i]+'" > <div class="card" style="overflow: hidden;"> <div class="card-image waves-effect waves-block waves-light"> <img style="height:160px!important;"class="activator" src="views/media/img/'+data.image[i]+'"> </div> <div class="card-content"> <a href=""onclick="editWorkshop('+data.id[i]+') style="font-weight:bolder;">'+data.title[i]+'<a><a style="color:red;"><i onclick="deleteWorkshop('+data.id[i]+')"class="material-icons right">delete</i></a></br><p>'+data.description[i].substring(0,19)+' ...</p> <p><a href="#!">'+data.price[i]+' €</a></p> </div> <div class="card-action center"> <a href="#">Inscription</br></a> </div> </div> </div>');
        $('#atelierList').append('<option value="'+data.id[i]+'"selected>'+data.title[i]+'</option>');

      }



    }

  });
}



function deleteWorkshop(id){



    $.ajax({
        type: 'POST',
        url: 'models/workshopDelete.php',
        dataType: 'json',
        data: {
          DelWork:$( "#delete" ).val(),
          id:id


        },
        success: function (data) {
          alert("supprimé");
          window.location ="/?c=workshop&t=index";//redirection

        }

    });

    // alert("supprimé");
    window.location ="/?c=workshop&t=index";//redirection
}
