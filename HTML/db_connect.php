<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cwdblogs";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
// else{
//     echo "connection was succesfully connected";
// }


?>
