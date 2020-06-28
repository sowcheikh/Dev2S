$("#addNew").on("submit", function(e) {
   e.preventDefault();
   if ($("#numbat").val()!='' || $("#type").val()!='') {
       $.ajax({
           url: $(this).attr("action"),
           type: 'POST',
           data: $(this).serialize(),
           dataType: 'JSON',
           success: function (res) {
               console.log(res);
               if (res.type== "success") {
                $("#addNew")[0].reset();
                $("#alert").addClass("alert-success");
               } else {
                $("#alert").addClass("alert-danger");
               }
               $("#alert").html(res.message);
               $("alert").show();
           }
       })
   } else {
       console.log('error');
       
   }
});

