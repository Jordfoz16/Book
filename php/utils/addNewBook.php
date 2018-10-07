<?php

/*
    Adds a new book into the database. This is a book that a user will have added
    through the website.
*/

require('./db.php');

$name = $_GET['name'];
$author = $_GET['author'];
$pages = $_GET['pages'];
$genre = $_GET['genre'];
$picture = $_GET['picture'];
$rating = $_GET['rating'];

$sql = "INSERT INTO books (`name`, `author`, `pages`, `genre`, `rating`,`picture`) VALUES ('".$_GET['name']."', '".$_GET['author']."', '".$_GET['pages']."', '".$_GET['genre']."', '".$_GET['rating']."', '".$_GET['picture']."')";
mysqli_query($connection, $sql);

?>