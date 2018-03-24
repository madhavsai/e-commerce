<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        alert("asd");
        $.post("signup_values.php",
        {
          name: "Donald Duck",
          city: "Duckburg"
        },
        function(data,status){
          if(data!="user alread exist"){
            alert("sfddaf");
          }
        });
    });
});
</script>
</head>
<body>

<button>Send an HTTP POST request to a page and get the result back</button>

</body>
</html>
