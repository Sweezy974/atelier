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
    $( "#atelierList" ).val() !="" &&
    $( "#nom" ).val() != "" &&
    $( "#prenom" ).val() != "" &&
    $( "#mail" ).val() != "" &&
    $( "#adresse" ).val() != "" &&
    $( "#ville" ).val() != "" &&
    $( "#cp" ).val() != "" &&
    $( "#tel" ).val() != "" &&
    $( "#nomEnfant1" ).val() != "" &&
    $( "#prenomEnfant1" ).val() != "" &&
    $( "#dateEnfant1" ).val() != ""
  ) {


    $.ajax({
        type: 'POST',
        url: 'models/Workshop.php',
        dataType: 'json',
        data: {
          nom:$( "#nom" ).val(),
          description:$( "#description" ).val(),
          categorie:$( "#categoryList" ).val(),
          age:$( "#ageList" ).val(),
          establishment:$( "#establishmentList" ).val(),
          maxEnfant:$( "#maxEnfant" ).val(),
          prix:$( "#prix" ).val(),



        },
        success: function (data) {
          console.log('créé');

        }

    });
    }
    else {
      alert("champs manquants");
    }
}
