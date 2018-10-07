var currentUserID;

function addBook(ID) {
    /*
    This function uses AJAX without jQuery to add a bookID
    into the readList table.
    */
    var bookID = ID;
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "./php/utils/addbook.php?bookID=" + bookID, true);
    xhttp.send();
}

function addNewBook(){
    /*
    This function is used to add a brand new book into the
    book table. It first gets all of the values from the input
    modal. It then checks to see if all of the feilds have been filled out,
    if they havent been filled out then it turns the input box red.

    If all the feilds have been filled out then it uses AJAX with jQuery
    to send data to a php file that adds the new book into the book table.
    It then reloads all of the books in the list
    */

    //Getting the variables
    var name = $("#newBookName").val();
    var author = $("#newBookAuthor").val();
    var pages = $("#newBookPages").val();
    var genre = $("#newBookGenre").val();
    var picture = $("#newBookPicture").val();
    var rating = $("#newBookRating").val()

    var isValidated = false;

    //Checking all feilds have been entered
    if(name == ""){ 
        $("#newBookName").addClass("is-invalid");
        isValidated = false;
    }else if(author == ""){
        $("#newBookAuthor").addClass("is-invalid");
        $("#newBookName").removeClass("is-invalid");
        $("#newBookName").addClass("is-valid");
        isValidated = false;
    }else if(pages == ""){ 
        $("#newBookPages").addClass("is-invalid");
        $("#newBookAuthor").removeClass("is-invalid");
        $("#newBookAuthor").addClass("is-valid");
        isValidated = false;
    }else if(rating == ""){ 
        $("#newBookRating").addClass("is-invalid");
        $("#newBookPages").removeClass("is-invalid");
        $("#newBookPages").addClass("is-valid");
        isValidated = false;
    }else if(picture == ""){ 
        $("#newBookPicture").addClass("is-invalid");
        $("#newBookRating").removeClass("is-invalid");
        $("#newBookRating").addClass("is-valid");
        isValidated = false;
    }else{
        //Resets the values
        isValidated = true;
        $("#newBookName").val("");
        $("#newBookAuthor").val("");
        $("#newBookPages").val("");
        $("#newBookPicture").val("");
        $("#newBookRating").val("")
    }

    //Sends the AJAX request if it has all been filled out
    if(isValidated == true){
        $('#newBook').modal('toggle');
        $.get("./php/utils/addNewBook.php", {"name" : name, "author" : author, "pages" : pages, "genre" : genre, "rating" : rating, "picture" : picture}, function(data){
        });
        //Reloads all of the books
        loadAllBooks("none");
    }
}

function removeBook(ID){
    /*
    Sends a AJAX request to a php file with the bookID. The php file then
    removes the book with that ID from the users readlist. The javascript then 
    reloads the readlist
    */
    var bookID = ID;

    $.get("./php/utils/removebook.php", {"bookID" : bookID, "userID" : currentUserID}, function(){
        loadBooks(currentUserID);
    });
}

function loadAllBooks(filter){
    /*
    This uses AJAX to load all of the books into the books page, it has
    two different request one is for sending filters so that only one genre
    of books is listed. It takes the return from the AJAX and adds it into the
    <div> tag with the id of #books
    */
    if(filter == "none"){
        $.get("./php/utils/loadAllBooks.php", null, function(data){
            $("#books").html(data);
        });
    }else{
        $.get("./php/utils/loadAllBooks.php", {"filter" : filter}, function(data){
            $("#books").html(data);
        });
    }
}

function loadBooks(ID){
    /*
    This uses AJAX to load only the books in with the ID of the user. It sends
    the request with the userID and with the data it recieves back it gets added
    to the <div> tag with the id of #books
    */
    var userID = ID;
    currentUserID = ID;

    $.get("./php/utils/loadbook.php", {"userID" : userID}, function(data){
        $("#books").html(data);
    });
}

function updateProgress(ID, pages){
    /*
    This function updates the progess of the books in a users read list.
    It gets the bookID and number of pages from parameters that are passed in.
    It then gets the number of pages read from the input box, then divids the read
    pages by the total pages and times by 100 to get the percentage. This is sent
    in a AJAX request to a php file that updates the progress in the data base.
    It then reload the books to get the updated progress
    */
    var bookID = ID;
    var numPages = pages;
    var element = "#book" + bookID;
    var progress = ($(element).val() / numPages) * 100;
    if($(element).val() > numPages) progress = 100;
    $.get("./php/utils/updateprogress.php", {"userID" : currentUserID, "bookID" : bookID, "progress" : progress}, function(data){
        loadBooks(currentUserID);
    });
}