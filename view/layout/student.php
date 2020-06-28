
<div class="card card-outline-secondary w-100 m-auto" id="result" style="overflow:scroll; height: 450px;">
</div>
<script>
    $(document).ready(function() {
         $.ajax({
          url : "<?=BASE_URL?>/admin/showStudent", //Request send to "action.php page"
          method:"POST", //Using of Post method for send data
          data:{},
          success:function(data){
              console.log(data);
              
           $('#result').html(data);
          }
         });

    })

      //scroll
   var x = 0;
   $(document).ready(function(){
     $("#result").scroll(function(){
       $("span").text( x+= 1);
     });
   });
</script>