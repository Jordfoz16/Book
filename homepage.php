<html>
    <head>
        <?php require('./php/templates/bootstrap.php'); ?>
        <link rel="stylesheet" href="./css/main.css">
    </head>

    <body>

        <?php
            session_start();
            require('./php/utils/db.php');
            require('./php/templates/navbar.php');
        ?>
        
        <div id="Carousel" class="container">
            <div id="controls" class="carousel slide bg-light" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    /*
                        This uses PHP and MySQL to get the lastest books that have been
                        added to the books table and add them into a carousel. It takes
                        the first 5 results from the sql query
                    */
                    $sql = "SELECT * FROM `books` WHERE 1 ORDER BY `bookID` DESC";
                    $result = mysqli_query($connection, $sql);

                    if(mysqli_num_rows($result) > 0){
                        for ($i=0; $i < 5; $i++) { 
                            $row = mysqli_fetch_assoc($result);

                            if($i == 0){
                                echo ' <div class="carousel-item active"> ';
                            }else{
                                echo ' <div class="carousel-item"> ';
                            }

                            echo '
                                <img class="d-block mx-auto" style="width: 400px; height: 600px" src="'.$row['picture'].'">
                                <div class="carousel-caption d-none d-md-block" style="background: rgba(235, 235, 235, 0.7)">
                                    <h4 style="color: black;">'.$row['name'].'</h4>
                                    <h6 style="color: black;">Book writen by '.$row['author'].'</h6>
                                </div>
                            </div>
                            ';
                        }
                    }
                ?>
                </div>
                <!-- Adds left and right arrows for the carousel -->
                <a class="carousel-control-prev" style="background-color: rgb(150, 150, 150)"; href="#controls" role="button" data-slide="prev">
                    <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" style="background-color: rgb(150, 150, 150);" href="#controls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <?php
        /*
            Shows a registration form if the user isnt current logged in.
            If they are logged in then it doesnt show the form
        */
        if(isset($_SESSION['_row'])){

        }else{
        ?>

        <div class="container">
            <div class="row pt-3">
                <div class="col-lg-6 col-md-12">
                    <h2>Join the website. Register here</h2>
                    <p>To join the website and start tracking and rating books. Just enter your email address and password in the form on the right.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form action="./register.php" method="POST">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <h3>Top rated books</h3>
                </div>
                <?php
                /*
                    This uses PHP and MySQL to get the top rated books in the books table
                    and sorts them. It then displays the top 6 in a grid with the title, author and rating
                */

                $sql = "SELECT * FROM `books` WHERE 1 ORDER BY `rating` DESC";
                $result = mysqli_query($connection, $sql);

                if(mysqli_num_rows($result) > 0){
                    for($i=0; $i < 6 ; $i++) { 
                        $row = mysqli_fetch_assoc($result);
                        //Using bootstrap to change the amount of columns an element takes up depending on the window size
                        echo '
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card mt-5" style="height: 450px;">
                                <img class="card-img-top mx-auto" src='.$row['picture'].' style="width: 200px;height: 300px;">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['name'].'</h5>
                                    <p class="card-text">Author: '.$row['author'].'<br>
                                    Rating: '.$row['rating'].'</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
                ?>
            </div>
        </div>

        <?php require('./php/templates/footer.php'); ?>
        
    </body>
</html>