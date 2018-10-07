<?php
/*
    Sets up the connection for the database
*/
$connection = mysqli_connect("localhost", "jordan", "password", "books");

if($connection === false){
    die("Error: Could not connect. " . mysqli_connect_error());
}
?>