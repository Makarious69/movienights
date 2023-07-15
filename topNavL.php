
<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>MOViENiGHT</title>
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body id="main">
    <div class="topnav">

        <a href="Home.php" class="logo-nav"><img src="images/logo.png" alt="Logo" height="40px" /></a>

        <div id="mySidenav" class="sidenav">
            <span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#215;</span>
            <a class="movies" href="Movies.php">Movies</a>
            <a class="tv-shows" href="Tv-shows.php">TV Shows</a>
            <a class="clebes" href="Celebrties.php">Celebs</a>
            <a class="tv-shows" href="#">News</a>
            <a class="tv-shows" href="about.php">About</a>
            <a class="tv-shows" href="#">Community</a>
        </div>
        <a class="menu-nav" onclick="openNav()">&#9776; Menu</a>


        <div>
        <form class="search-container" action="#">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        

        <?php  if (!isset($_SESSION['username'])) :   ?>
            <a class="menu-nav" id="signin" href="sign_in_page.php"><i class="fa fa-fw fa-user"></i> Sign In</a>
        <?php endif ?>
        <?php if (isset($_SESSION['username'])) : ?>
    <a class="menu-nav" href="Watchlist.php">&#10009; Watchlist</a>
    <p style="margin-left:10px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <form method="post" action="home.php">
    <button type="submit" class="menu-nav logout" id="signin" name="logout"><i class="fa fa-sign-out"></i> Log out</button>
 </form>
 
 <?php endif ?>
    </div>


    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>

    <div id="overlay" onclick="closeNav()"></div>
