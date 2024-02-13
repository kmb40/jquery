<?php

if (isset($_POST['submit'])) { // Check for submit
    $name = $_POST['name']; // Declare var for efficiency 
    $email = $_POST['email']; // Declare var for efficiency 
    $gender = $_POST['gender']; // Declare var for efficiency 
    $message = $_POST['message']; // Declare var for efficiency 

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($name) || empty($email) || empty($message)) {
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Write a valid email address!</span>";
        $errorEmail = true;
    }
    else {
        echo "<span class='form-success'>You completed all fields!</span>";
    }
}
    else {
        echo "There was an error!";
    }

?>
<?php /* This script tag is purposely placed outside of the php tags */ ?>
<script>
    $("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("input-error");

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    // If there were errors
    if (errorEmpty == true) {
        $("#mail-name, #mail-email, #mail-message").addClass("input-error");
    }
    if (errorEmpty == true) {
        $("#mail-email").addClass("input-error");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#mail-name, #mail-email, #mail-message").val("");
    }
</script>