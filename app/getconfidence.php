<?php
 include 'connect.php'; 
//$confidence = $_POST["confident"];
//$sql = mysqli_query($con,"INSERT into confidence1 VALUES ('ABCD', '$confidence');");
 if (isset($_POST['submit'])) {
 		echo "string";
        if(isset($_POST['confident']))
        {
            $confidence = $_POST['confident'];
            $sql = mysqli_query($con,"INSERT into confidence1 VALUES ('ABCD', '$confidence');");
        }
    }
 ?>