<html>
    <head>
        <?php require('./php/templates/bootstrap.php'); ?>
        <link rel="stylesheet" href="./css/main.css">
    </head>

    <body>

        <?php
        /*
            Signs the user out by destroying the session. It then allow the user to
            go back to the home page
        */

        session_start();
        require('./php/utils/db.php');
        require('./php/templates/navbar.php');
        
        session_destroy();
        ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Signed out</h4>
                    <a class='btn btn-success' href='./homepage.php'>Go Home</a>
                </div>
            </div>
        </div>
        

        <?php
        require('./php/templates/footer.php');
        ?>



    </body>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Icons -->
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

</html>