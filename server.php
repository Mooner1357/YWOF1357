<?php

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "register_db";

     // create Connecttion
     $conn = mysqli_connect($servername, $username, $password, $dbname);

     // check Connecttion
     if (!$conn) {
        die("connection failed" . mysqli_connect_error());
     } else {
     }


?>