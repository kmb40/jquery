<?php
include '../db/dbh.php';

$commentNewCount = $_POST['commentNewCount'];

$sql = "SELECT * FROM guide_comment LIMIT $commentNewCount"; // Select from qs db comments table. Quantity is based on value of POSTED commentNewCount vaar
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