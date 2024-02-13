<?php
    # List of names. Could also be data contained in a database
    $existingNames = array("Daniel","Dennis","Danny","Jane");

        if (isset($_POST['suggestion'])) { // Check for POST method
            $name = $_POST['suggestion']; // Declare var for efficiency 
        
            
        if (!empty($name)) {
            // Check by looping whether posted name exist in the array
            foreach ($existingNames as $existingName ) { // Each loop considers each array item as existingname
                if (strpos($existingName, $name) !== false ) {
                    echo $existingName;
                    echo "<br>";
                }
            }
        }
    }

?>