$(document).ready(function(){

  $("#adduser").click(function(){

    $.ajax({
      type: "POST",
      url: "../php/adduser.php",
      cache: "false",
      data: {name:$("#user").val(),password:$("#pwd").val()},
      success: function(data){
        alert(data);
        $("#form2").trigger("reset");
      },
      error: function(){
        alert("error");
      }
    });
  });

  $("#form2").submit(function(){
    event.preventDefault();
  });
});