<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>JS Get and POST</title>

    <script>
     // jQuery   
     // Check whether value exists in the db already
      $(document).ready(function() { //Load contents AFTER the page has finished loading. This allows placement of the code in the head vs the end of the page
        
        $("input").keyup(function() { // When something is written in the input field
            var name = $("input").val (); // Declare var input equal value
            $.post("post/suggestions.php", { // Post these values to suggestions.php
                suggestion: name
            }, function (data, status) { // Status is optional
                $("#test").html(data);
            });
        });

      });  
  </script>
</head>
<body>

<input type="text" name="name">  
<p id="test"></p>

</body>
</html>