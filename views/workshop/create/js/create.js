function workshopType() {
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


      for (i = 0; i < data.categoryId.length; i++) {
        $('#categoryList').append('<option value="'+data.categoryId[i]+'"selected>'+data.categoryName[i]+'</option>');
      }
      for (i = 0; i < data.id.length; i++) {
        $('#ageList').append('<option value="'+data.age_id[i]+'"selected>'+data.age_start[i]+'-'+data.age_end[i]+' ans</option>');

      }
      for (i = 0; i < data.id.length; i++) {
        $('#establishmentList').append('<option value="'+data.establishment_id[i]+'"selected>'+data.establishment_name[i]+'</option>');

      }



    }

  });
}


function workshopCreate(){
  if (
    $( "#nom" ).val() != "" &&
    $( "#description" ).val() != "" &&
    $( "#categoryList" ).val() != "" &&
    $( "#ageList" ).val() != "" &&
    $( "#establishmentList" ).val() != "" &&
    $( "#maxEnfant" ).val() != "" &&
    $( "#prix" ).val() != "" &&
    $( "#dateDebut" ).val() != "" &&
    $( "#dateFin" ).val() != ""
  ) {




    $.ajax({
      type: 'POST',
      url: 'models/workshopCreate.php',
      dataType: 'json',
      data: {
        nom:$( "#nom" ).val(),
        description:$( "#description" ).val(),
        categorie:$( "#categoryList" ).val(),
        age:$( "#ageList" ).val(),
        establishment:$( "#establishmentList" ).val(),
        maxEnfant:$( "#maxEnfant" ).val(),
        prix:$( "#prix" ).val(),
        dateDebut:$( "#dateDebut" ).val(),
        dateFin:$( "#dateFin" ).val(),



      },
      success: function (data) {
        alert("créé");
        window.location ="/?c=workshop&t=index";//redirection

      }

    });

    
    alert("atelier créé ");
    window.location ="/?c=workshop&t=index";//redirection
  }
  else {
    alert('champs manquants');
  }
}
