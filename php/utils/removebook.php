<?php

/* 
    This removes a book from the readlist table for a given user and book
*/

require('./db.php');

$sql = "DELETE FROM readlist WHERE `bookID` = " . $_GET['bookID'] . " AND `userID` = " . $_GET['userID'];

mysqli_query($connection, $sql);

?>