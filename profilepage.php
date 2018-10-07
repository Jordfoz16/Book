<script src='./scripts/books.js'></script>

<div class="container">
    <br>
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
            
            <?php
            /*
            Loads the users infomation after they have logged in.
            Creates a card on the left side that contains the image,
            name, username, email and gender. It also has a sign out button that
            links to the sign out php file
            */
            $row = $_SESSION['_row'];
            echo '
            <div class="card" style="width: 300px">
                <img class="card-img-top" src=' . $row['picture'] . ' alt="" style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Profile info</h5>
                    <p class="card-text">Name: '.$row['fullname'].'</p>
                    <p class="card-text">Username: '.$row['username'].'</p>
                    <p class="card-text">Email: '.$row['email'].'</p>
                    <p class="card-text">Gender: '.$row['gender'].'</p>
                    <a href="./signout.php" class="btn btn-primary">Sign out</a>
                </div>
                ';
            ?>
                    
            </div>
        </div>
        <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
            <h2>Read List</h2>
            <div class="row" id="books" class="mb-5">
                <?php
                /*
                This passes the userID into a javascript function that will
                load all the books that the user has added to there read list
                */
                echo "
                <script>loadBooks(".$_SESSION['_row']['userID'].");</script>
                ";
                ?>
            </div>
        </div>
    </div>
</div>