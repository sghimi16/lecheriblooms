<?php

require "config/constants.php";

     $host = 'mysql.lecheribloom.com';
     $user = 'lecheri';
     $password = 'Lecheriblooms';
     $database = "lecheri";

// Create connection
$con = mysqli_connect($host, $user, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>