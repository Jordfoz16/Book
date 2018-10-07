<?php

/*
    This loads all the books that are in a readlist table for a given user.
    Starts by querying with MySQL to get the books that match the userID then sorts
    them by the one with the most progress. The tables are joined so i can get the 
    correct infomation with out a second query.

    It then creates a modal and card for each of the books that are in that users read list.
    The modal is so the user can update there progress on how many pages they read.
    The card contains infomation about the like the name and the amount of progress they have
    made. Once they have got 100 percent progress the progress bar then turns green and says completed.
*/

require("./db.php");

//SQL query
$sql = "SELECT readlist.bookID, readlist.userID, books.picture, readlist.progress, books.name, books.pages
FROM readlist
INNER JOIN books ON readlist.bookID = books.bookID
WHERE readlist.userID = '".$_GET['userID']."'
ORDER BY readlist.progress DESC";

$result = mysqli_query($connection, $sql);
if(mysqli_num_rows($result) > 0){
    while($books = mysqli_fetch_assoc($result)){
        //Creates the modal to update the users progress
        echo '
            <div class="modal" id="'.$books['bookID'].'" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title">'.$books['name'].'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Enter Number of pages read (Total: '.$books['pages'].'): <input type="text" class="form-control" name="progress" id="book'.$books['bookID'].'"></p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" onclick="updateProgress(\''.$books['bookID'].'\', \''.$books['pages'].'\')" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            '.
            //Creates a card to show the book and the amount of progress with buttons to remove and update
            '
            <div class="mt-5 mx-auto">
                <br>
                <div class="card mx-auto" style="width: 225px; height: auto;">
                    <img class="card-img-top mt-1 mx-auto" src='.$books['picture'].' style="width: 200px;height: 300px;">
                    <div class="card-body">
                        <p class="card-text">Progress
                        ';
                        if($books['progress'] == 100){
                            //Turns the progress bar green if they have completed 100 percent of the book
                            echo '
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: '.$books['progress'].'%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Completed</div>
                            </div>
                            ';
                        }else{
                            echo '
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: '.$books['progress'].'%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            ';
                        };
                        echo '
                        </p>
                        <button type="button" onclick="removeBook(\''.$books['bookID'].'\')" class="btn btn-danger">Remove</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#'.$books['bookID'].'">Update</button>
                    </div>
                </div>
            </div>
        ';    
    }
}

?>