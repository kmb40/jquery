<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("button").click(function() {
                $.get("test.txt", function(data, status) {
                    $("#test").html(data);
                        alert(status);
                })
            });

        });


    </script>
</head>
<body>
   <button>Click me to get data!</button> 
   <p id="test"></p>
</body>
</html>