<?php


//Connection to database
define('databaseName', 'vote');
$servername = "localhost";
$username = "kunonukaiza";
$password = "KUNONu2025!";
$dbname = databaseName;

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die(" <p id=\"content\" > Connection failed: " . $connection->connect_error . "<br> </p> ");
}
echo "<h1 class=\"heading\" > DARUSO <br> <br> </h1>";

