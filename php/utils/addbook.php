<?php

/*
    This adds a book to the read list for a user.
    It gets the userID and the bookID and checks to see
    if the book is already in the list. If its nots in the list
    then it adds it else it skips it.
*/

require('./db.php');

session_start();

//Gets the userId and bookID
$userID = $_SESSION["_row"]['userID'];
$bookID = $_GET['bookID'];

//MySQL Query
$sql = "SELECT * FROM `readlist` WHERE `userID` = " . $userID;

$result = mysqli_query($connection, $sql);
$inList = false;

//Checks if the book is in the list
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($row['bookID'] == $bookID){
            $inList = true;
        }
    }
}

//If its not adds the book to the list.
if($inList === false){
    $sql = "INSERT INTO readlist (`userID`, `bookID`, `progress`) VALUES (".$userID.", ".$bookID.", 0)";

    mysqli_query($connection, $sql);
    mysqli_close($connection);
}
?>