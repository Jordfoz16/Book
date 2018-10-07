<html>
    <head>
        <title>Profile</title>
        <?php require('./php/templates/bootstrap.php'); ?>
    </head>

    <body>
    
        <?php
        session_start();
        require('./php/utils/db.php'); 
        require('./php/templates/navbar.php'); 

        //Users Logged in
        if(isset($_SESSION['_row'])){
            
            require('./profilepage.php');

        }else{
            //Checks if the submit variable as been set
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
                $result = mysqli_query($connection, $sql);

                echo "<div class='container'>
                    <div class='row'>
                        <div class='col-6'>";
                
                //Checks to see if there is a row in the table matches the login details
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION["_row"] = $row;
                    echo "<h2>Successfully Login</h2>
                    <h4>Continue to homepage</h4>
                    <a class='btn btn-success' href='./homepage.php'>Go Home</a>";
                }else{
                    echo "<h2>No login Found</h2>
                    <h4>Create an account</h4>
                    <a class='btn btn-success' href='./register.php'>Create Account</a>";
                }

                echo "
                        </div>
                    </div>
                </div>";
            }else{
                //If sumbit hasnt been set it shows the login form
            ?>
            <!--Login form-->
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <form method="POST">
                            <div class="form-group">
                                <label for="loginUsername">Username:</label>
                                <input type="text" name="username" id="loginUsername" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for='loginPassword'>Password:</label>
                                <input type='password' name='password' id='loginPassword' class='form-control'>
                            </div>
                            <div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }}
        ?>
        <?php require('./php/templates/footer.php'); ?>
    </body>
</html>