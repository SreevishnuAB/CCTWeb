$(document).ready(function(){

  $("#submit").click(function(){

    $.ajax({
      type: "POST",
      url: "php/login.php",
      cache: "false",
      data: {username:$("#username").val(),password:$("#password").val()},
      success: function(data){
        if(data == 'true')
          window.location = "php/admin.php";
        else
          alert("Incorrect Username or Password");
      },
      error: function(){
        alert("error");
      }
    });
  });
  
  $("#form1").submit(function(){
    event.preventDefault();
  });
});