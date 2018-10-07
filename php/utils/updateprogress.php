<?php

/* 
    Updates the progress a user has made on a book. By using the bookID,
    userID and the progress
*/

require('./db.php');

$sql = "UPDATE readlist
SET `progress` = ".$_GET['progress']."
WHERE `bookID` = ".$_GET['bookID']." AND `userID` = " . $_GET['userID'];

mysqli_query($connection, $sql);

?>