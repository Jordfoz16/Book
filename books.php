<html>
    <head>
        <?php require('./php/templates/bootstrap.php'); ?>
        <link rel="stylesheet" href="./css/main.css">
        <script src="./scripts/books.js"></script>
    </head>

    <body>
        <?php
        session_start();
        require('./php/utils/db.php');
        require('./php/templates/navbar.php');
        ?>

        <!-- Adds a modal that allows the users to add a new book into the books table.
        Once they click the submit button it calls a javascript function that uses jQuery
        to get the values from the textbox and dropdown boxes from the modal.
        
        If one of the inputs are not entered the colour of the box turns red to show the user
        that they need to enter that infomation -->
        <div class="modal" id="newBook" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add new book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <div class="modal-body">
                            <p>Book name: <input class="form-control" type="text" name="newBookName" id="newBookName" required></p>
                            <p>Author: <input class="form-control" type="text" name="newBookAuthor" id="newBookAuthor" required></p>
                            <p>Number of Pages: <input class="form-control" type="number" name="newBookPages" id="newBookPages" required></p>
                            <p>Rating: <input class="form-control" type="number" name="newBookRating" id="newBookRating" required></p>
                            <p>Picture URL: <input class="form-control" type="text" name="newBookPicture" id="newBookPicture" required></p>
                            <p>Genre:</p>
                            <select class="form-control" id="newBookGenre" required>
                                <option>Fantasy</option>
                                <option>Drama</option>
                                <option value="Science">Science Fiction</option>
                                <option>Action</option>
                                <option>Horror</option>
                                <option>Romance</option>
                            </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="addNewBook();">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- A buttion to open the new book modal -->
        <div class="container">
            <div class="row justify-content-md-center mt-2">
                <h4>Book not here, add your own: <button type="button" data-toggle="modal" data-target="#newBook" class="btn btn-primary">Add Book</button></h4>
            </div>
        </div>

        <!-- A modal to tell the user that a book was added to there list -->
        <div class="modal" id="bookModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Book added</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Booked added to your read list. Go to <a href="./login.php">book list</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row" id="books">
            </div>
            <?php
            /*
            Checks if there is a variable in the GET array called filter. If there is a filter
            I will only load books with the same genre as the filter. If there is no filter then it
            will load all of the books ordered by its rating
            */
            if(isset($_GET['filter'])){
                echo '<script>loadAllBooks("'.$_GET['filter'].'");</script>';
            }else{
                echo '<script>loadAllBooks("none");</script>';
            }
            ?>
        </div>

        <?php require('./php/templates/footer.php'); ?>
        
    </body>
</html>