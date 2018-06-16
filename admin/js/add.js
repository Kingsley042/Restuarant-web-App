$(document).ready(function () {
      var form = document.getElementById('meal');
      form.addEventListener('submit', function(e) {
        e.preventDefault();

          var ajax = new XMLHttpRequest();
          ajax.open("POST", "inc/process.php", true);
          ajax.onload = function(e) {
            $("#error").html(ajax.responseText);
          };
          ajax.send(new FormData(form));
        
      },false);
})