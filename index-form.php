<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>JS Form</title>

    <script>
     // jQuery   
     // Check whether value exists in the db already
      $(document).ready(function() { //Load contents AFTER the page has finished loading. This allows placement of the code in the head vs the end of the page
        
        $("form").submit(function(event) { // When the form is submitted
            event.preventDefault(); // Prevent the form action and use code here instead on submit
            var name = $("#mail-name").val();
            var email = $("#mail-email").val();
            var gender = $("#mail-gender").val();
            var message = $("#mail-message").val();
            var submit = $("#mail-submit").val();
            $(".form-message").load("mail/mail.php", {
                name: name,
                email: email,
                gender: gender,
                message: message, 
                submit: submit

            });
          });
        });  
  </script>
</head>
<body>

<form action="mail/mail.phgjjgjhp" method="POST"><?php /* Needs to be disabled as jQuery is used for this function instead. This can be removed but should be kept for security op sec */ ?>
    <input id = "mail-name" type = "text" name="name" placeholder="Full Name">
    <br>
    <input id = "mail-email" type = "text" name="email" placeholder="E-mail">
    <br>
    <select id = "mail-gender" name = "gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <textarea id = "mail-message" name = "message" placeholder = "Message"></textarea>
    <br>
    <button id = "mail-submit" type = "submit" name = "submit">Send e-mail</button>
    <p class="form-message"></p>
</form> 

</body>
</html>