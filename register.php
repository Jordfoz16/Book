<!DOCTYPE html>

<html>
    <head>
        <title>Register</title>
        <?php require('./php/templates/bootstrap.php'); ?>
    </head>
    <body>
         <?php
        require('./php/utils/db.php');
        require('./php/templates/navbar.php');
        
        /*
            If the variable "createUser" has been set then it gets values from
            the POST array. It then uses MySQL to insert the data into the users database
        */

        if(isset($_POST['createUser'])){
            $newUsername = $_POST['username'];
            $newPassword = $_POST['password'];
            $newEmail = $_POST['email'];
            $newFullname = $_POST['fullname'];
            $newGender = $_POST['gender'];
            $newPicture = $_POST['picture'];

            $sql = "INSERT INTO users (`username`, `password`, `email`, `fullname`, `gender`, `picture`) VALUES ('$newUsername', '$newPassword', '$newEmail', '$newFullname', '$newGender', '$newPicture')";

            mysqli_query($connection, $sql);
            mysqli_close($connection);
        
        ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Account Registered</h2>
                    <h4>Thank you for registering your account, Click the button to login</h4>
                    <a class="btn btn-primary" href="./login.php">Login</a>
                </div>
            </div>
        </div>
        
        <?php
        }else{

            /*
                If the variable "createUser" hasn't been set then it shows a registion form.
                If they have started the registion on the home page the infomation that they
                have entered in there will be carried across to this registion form using POST 
            */
        ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="" method="post" class="form-group">
                        <div>
                            <label for="registerUsername">Username</label>
                            <input type="text" name="username" id="registerUsername" class="form-control">
                        </div>
                        <div>
                        <?php
                            //Checks if the password has already been entered
                            if(!isset($_POST['password'])){
                                echo '<label for="registerPassword">Password</label>
                                <input type="password" name="password" id="registerPassword" class="form-control">';
                            }else{
                                echo '<label for="registerPassword">Password</label>
                                <input type="password" name="password" id="registerPassword" class="form-control" value=' . $_POST['password'] . '>';
                            }
                        ?>  
                            
                        </div>
                        <div>
                        <?php
                        //Checks if the email has already been entered
                            if(!isset($_POST['email'])){
                                echo "<label for='registerEmail'>Email Address:</label>
                                <input type='email' name='email' id='registerEmail' class='form-control'>";
                            }else{
                                echo '<label for="registerEmail">Email Address:</label>
                                <input type="email" name="email" id="registerEmail" class="form-control" value=' . $_POST["email"] . '>';
                            }
                        ?>  
                        </div>
                        <div>
                            <label for="registerFullname">Full name:</label>
                            <input type="text" name="fullname" id="registerFullname" class="form-control">
                        </div>
                        <div>
                            <label for="registerGender">Gender</label>
                            <input type="radio" name="gender" value="M" class="radio" checked>Male
                            <input type="radio" name="gender" value="F" class="radio">Female
                        </div>
                        <div>
                            <label for="registerPicture">Profile Picture:</label>
                            <input type="text" name="picture" id="registerPicture" class="form-control">
                        </div>
                        <br>
                        <button type="submit" name="createUser" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
        
        <?php
        }
        ?>

        <?php require('./php/templates/footer.php'); ?>
    </body>
</html>