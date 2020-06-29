$(document).ready(function () {
    fetchUser(); 
    function fetchUser() // This function will fetch data from table and display under <div id="result">
    {
        var action = "Load";
  $.ajax({
    url: "../admin/showStudent", //Request send to "action.php page"
    method: "POST", //Using of Post method for send data
    data: {action:action},
    success: function (data) {
      //  console.log(data);

      $("#result").html(data);
    },
  });
}

$('#action').click(function(){
    var nom = $('#nom').val(); //Get the value of first nom textbox.
    var prenom = $('#prenom').val(); //Get the value of last nom textbox
    var id = $('#customer_id').val();  //Get the value of hidden field customer id
    var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
    if(nom != '' && prenom != '') //This condition will check both variable has some value
    {
     $.ajax({
      url : "../admin/updateStudent",    //Request send to "action.php page"
      method:"POST",     //Using of Post method for send data
      data:{nom:nom, prenom:prenom, id:id, action:action}, //Send data to server
      success:function(data){
          console.log(data);
          
        $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
       fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
      }
     });
    }
    else
    {
     alert("Les deux champs sont obligatoires"); //If both or any one of the variable has no value them it will display this message
    }
   });

  $(document).on("click", ".update", function () {
    var id = $(this).attr("id");
    var action = "Modifier";
    $.ajax({
      url: "../admin/updateStudent",
      method: "POST",
      data: { id: id, action:action },
      success: function (data) {
        $("#customerModal").modal("show");
        $(".modal-title").text("Modifier les données de l'étudiant");
        $("#action").val("Modifier");
        $("#customer_id").val(id);
        $("#nom").val(data.nom);
        $("#prenom").val(data.prenom);
      },
      error: function (data) {
          console.log(data);
          
      }
    });
  });

  $(document).on("click", ".delete", function () {
    var id = $(this).attr("id");
    if (confirm("Voulez-vous vraiment supprimer les données de cet étudiant?")) {
      var action = "Supprimer";
      $.ajax({
        url: "../admin/deleteStuent",
        method: "POST",
        data: { id: id, action: action },
        success: function (data) {
          fetchUser();
          console.log(data);
          
        },
      });
    } else {
      return false;
    }
  });
});

//scroll
var x = 0;
$(document).ready(function () {
  $("#result").scroll(function () {
    $("span").text((x += 1));
  });
});

$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $("#formSearch").on("submit", function() {
        $.ajax({
            url: "../admin/search", //Request send to "action.php page"
            method: "POST", //Using of Post method for send data
            data: {action:action},
            success: function (data) {
              //  console.log(data);
        
              $("#result").html(data);
            },
          });
    })
  });