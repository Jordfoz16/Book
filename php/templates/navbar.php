<!-- Template for the navbar makes it easier to add into all of the pages -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-auto">
        <a class="navbar-brand" href="#">Book Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./homepage.php"><i class="fas fa-home"></i> Home</a>
            </li>
            
            <li class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><i class="fas fa-book"></i> Books<span class="caret"></span></a>
                <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./books.php">All books</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Science">Science fiction</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Drama">Drama</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Action">Action and Adventure</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Horror">Horror</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Romance">Romance</a></li>
                        <li><a class="dropdown-item" href="./books.php?filter=Fantasy">Fantasy</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./login.php"><i class="fas fa-user"></i> Profile/Login</a>
            </li>
        </ul>
        </div>
    </nav>