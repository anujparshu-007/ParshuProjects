<?php
    $conn=mysqli_connect("localhost", "root", "Admin@123", "testSchool");

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }

    // echo "Connected Successfully";
    // echo "<br>";

?>