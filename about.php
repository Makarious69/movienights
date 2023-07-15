<?php include('server.php')?>
<!DOCTYPE html>
<head>
<title>About Us</title>
<link rel="stylesheet" href="Css/about.css">
<link rel="stylesheet" href="CSS/HomeStyle.css">
<script type="text/javascript" src="JavaScript/Home.js"></script>
<link rel="stylesheet" href="Css/scrollbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body id="main">
<?php  include("topNavL.php"); ?>
    
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
    <div id="overlay" onclick="closeNav()"></div>
    
    <div class="about-section">
        <h1>About Us</h1>
        <p>We are a startup striving to innovate in how
            people watch and appreciate movies.
            We want viewers to get to see the
            most authentic watching experience possible
            and get to enjoy the best of movies
            and have the knowledge they need to know
            what they should spend their valuable time on.
        </p>
        <a href="#" class="readmore">Read More</a>
    </div>
    <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
    <script>
    var mybutton = document.getElementById("topBtn");
    window.onscroll = function() {scrollFunction()};
    </script>
</body>



    <div class="footer-basic" style="margin-top:17.5% ;">
        <footer>
            <div class="social">
                <a href="#"><img src="images/facebookicon.jpg"></a>
                <a href="#"><img src="images/instagramicon.jpg"></a>
                <a href="#"><img src="images/twittericon.jpg"></a>
                <a href="#"><img src="images/googleicon.jpg"></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="Home.php ">Home</a></li>
                <li class="list-inline-item"><a href="about.php">About</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact Us</a></li>
            </ul>
            <p class="copyright">MovieNights © 2021</p>
        </footer>
    </div>
</php>