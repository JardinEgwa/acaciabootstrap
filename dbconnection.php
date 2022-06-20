<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Acacia";
//connection to the database
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("it did not connect" . $conn->connect_error);
} else {
    echo "connected successfully to the db";
}
