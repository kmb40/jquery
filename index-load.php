<?php
    include 'db/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

 <?php /*   Basic
    <script>
        $(document).ready(function() {
            $("#btn").click(function(){
                $("#test").load("loadedData.txt"); // Call text file for as a data source
            });
        });
    </script>
*/ ?>

<?php /* Load data from a text file named loadedData.txt while posting data to said file first (not completed)
    <script>
        $(document).ready(function() {
            $("#btn").click(function(){
                $("#test").load("loadedData.txt", {
                    Name: "Daniel",
                    Lastname: "Nielsen" // Post to text method
                }, function (){ 
                    alert("Hi there!");
                }); 
            });
        });
    </script>
*/ ?>

<script>
        $(document).ready(function() { //Load AFTER the page loads
            var commentCount = 2; // Set count value. Should match the below db fetch LIMIT value
            $("#btn").click(function(){ // When button is clicked
                commentCount = commentCount +2; // count value plus two
                $("#comments").load("load-data/load-comments.php", { // Load data from file "load-comments"
                    commentNewCount: commentCount // Set var value for commentNewCount to value of commentCount using post method
                }//, //function (){ 
                    //alert("Hi there!");
                //}
                ); 
            });
        });
    </script>

</head>
 <body>
   <div id="comments">
    <?php
        $sql = "SELECT * FROM guide_comment LIMIT 2"; // Select 2 from qs db comments table
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) { // If more than zero row exsists
            while ($row = mysqli_fetch_assoc($result)) {//Fetches each row and adds it to an array
                echo "<p>";
                echo $row['fld_name'];
                echo "<br>";
                echo $row['fld_comments'];
                echo "</p>";
            }
        } else {
            echo "There are no comments!";
        }
    ?>
   </div>   
  <button id="btn">Show more comments</button>
 </body>
</html>