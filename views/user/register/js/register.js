

function register(){

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
        url: 'models/User.php',
        dataType: 'json',
        data: {
          atelier:$( "#atelierList" ).val(),
          ParentLastname:$( "#nom" ).val(),
          ParentFirstname:$( "#prenom" ).val(),
          ParentMail:$( "#mail" ).val(),
          ParentAddress:$( "#adresse" ).val(),
          ParentComp:$( "#complement" ).val(),
          ParentCity:$( "#ville" ).val(),
          ParentZip:$( "#cp" ).val(),
          ParentPhone:$( "#tel" ).val(),

          ChildLastname:$( "#nomEnfant1" ).val(),
          ChildFirstname:$( "#prenomEnfant1" ).val(),
          ChildDate:$( "#dateEnfant1" ).val(),
          ChildClass:$( "#classeEnfant1" ).val(),

          ChildLastname2:$( "#nomEnfant2" ).val(),
          ChildFirstname2:$( "#prenomEnfant2" ).val(),
          ChildDate2:$( "#dateEnfant2" ).val(),
          ChildClass2:$( "#classeEnfant2" ).val(),

        },
        success: function (data) {
          console.log('inscrit');

        }

    });
    }
    else {
      alert("champs manquants");
    }
}
