$(document).ready(function(){
  $("#submit").click(function(){
    $.ajax({
      type: "POST",
      url: "php/login.php",
      cache: "false",
      data: {username:$("#username").val(),password:$("#password").val()},
      success: function(data){
        if(data)
          window.location = "admin.html";
        else
          alert(data);
          window.location = "index.html";
      },
      error: function(){
        alert("error");
      }
    });
  });
});