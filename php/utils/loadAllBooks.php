<?php

/*
    Loads all of the book into the main book page unless there is a filter.
    It starts by making a SQL query to get all of the books. It then checks
    to see if there is a filter, if there is a filter then it only gets the
    books from that genre to match the filter.
*/

require('./db.php');

//MySQL query to load all of the books
$sql = "SELECT * FROM `books` WHERE 1 ORDER BY `rating` DESC";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0){
    //Check if a filter is set
    if(isset($_GET['filter'])){
        $filter = $_GET['filter'];
    }else{
        $filter = null;
    }
    while($row = mysqli_fetch_assoc($result)){
        //Continues the loop if it doesnt match the filter
        if($row['genre'] != $filter && $filter != null) continue;
        echo '
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <br>
            <div class="card mx-auto" style="width: auto; height: 550px;">
                <img class="card-img-top mx-auto mt-2" src='.$row['picture'].' style="width: 200px;height: 300px;">
                <div class="card-body">
                    <h6 class="card-title">'.$row['name'].'</h6>
                    <p class="card-text">Author: '.$row['author'].'</p>
                    <p class="card-text">Genre: '.$row['genre'].'</p>
                    <p class="card-text">Pages: '.$row['pages'].', Rating: '.$row['rating'].'</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookModal" onclick="addBook(\''.$row['bookID'].'\')">Add to List</button>
                </div>
            </div>
        </div>
        ';
    }
}
?>