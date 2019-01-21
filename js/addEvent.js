$(document).ready(function(){

  $("#addevent").click(function(){

    $.ajax({
      type: "POST",
      url: "../php/addevent.php",
      cache: "false",
      data: {event:$("#event").val(),date:$("#eventdate").val()},
      success: function(data){
        alert(data);
        $("#form3").trigger("reset");
      },
      error: function(){
        alert("error");
      }
    });
  });

  $("#form3").submit(function(){
    event.preventDefault();
  });
});