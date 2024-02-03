<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>JS Alerts</title>
</head>
<body>
    
<p id="test">This is a test paragraph!</p>

  <script>
     // jQuery   
      $(document).ready(function() { //Load contents AFTER the page has finished loading. This allows placement of the code in the head vs the end of the page
        $("#test").click(function() { // Target element with id named "test"
            $(this).hide();
        });
      });  
    // Vanilla
    //  document.getElementById("test").onclick = function() { // Target element with id named "test", then when clicked alert.
    //       alert("Clicked");
    //  }
  </script>

</body>
</html>