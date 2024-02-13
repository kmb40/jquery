<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>JS Get and POST</title>

    <script>
     // jQuery   
      $(document).ready(function() { //Load contents AFTER the page has finished loading. This allows placement of the code in the head vs the end of the page
        $("button").click(function() { // Target button element
            $.get("test.txt", function(data, status){ //Get data from file, returns the data and status 
                $("#test").html(data); // then insert the data into the p element with id "test" below
                 alert(status);// Optional status alert
            }) 
        });
      });  
    // Vanilla
    //  document.getElementById("test").onclick = function() { // Target element with id named "test", then when clicked alert.
    //       alert("Clicked");
    //  }
    
  </script>
</head>
<body>
<button>Click me to get data!</button>  
<p id="test"></p>

</body>
</html>