<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
   echo "Not Connected";
}

?>
