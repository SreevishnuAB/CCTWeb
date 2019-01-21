$(document).ready(function(){

    $("#lo-button").click(function(){
  
      $.ajax({
        type: "POST",
        url: "../php/logout.php",
        cache: "false",
        success: function(data){
            if(data == "Logged Out"){
                alert(data);
                window.location="../index.php";
            }
        },
        error: function(){
          alert("error");
        }
      });
    });
  });