
window.onload = function(){

$(document).ready(function() {
    $.ajax({
      url: "..//PHP/Bienvenidos.php",
      type: "POST",
      success: function(response) {
        var data = JSON.parse(response);
        document.getElementById("username").value = data.username;
      },
      error: function(xhr, status, error) {
        console.log("Error: " + error);
      }
    });
  });

}