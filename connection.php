 <?php

    $link = mysqli_connect("localhost", "root", "harekrishna", "NGO");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }


?>