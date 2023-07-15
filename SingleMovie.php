<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Free Guy (2021)</title>
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/SingleMovieStyle.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>

<body id="main">
<?php  include("topNavL.php"); ?>
    
    <div class="container">
        <div class="fullscreen-video">
            <video src="videos/freeguy.mp4" autoplay="true" loop="true" width=100% muted></video>
        </div>
        <div class="video-overlay"></div>
        <div class="movie-content">
            <h1 class="movie-name">Free Guy</h1>
            <p>2021 . 1h 55min</p>

                <div class="movie">
                    <div class="movie-poster"><img src="images/freeguyjpg.jpg" height=400px width=270px></div>
                    <a class="movie-trailer" href="videos/freeguy.mp4">Trailer</a>
                    <?php  if (isset($_SESSION['username'])) :; ?>
                    <a class="add" href="">+</a>
                    <?php endif ?>
                </div>
            
        </div>
    </div>

        <div class="movie-details">
            <h2>Description</h2>
            <p>
                <b>A bank teller discovers that he's actually an NPC inside a brutal, open world video game.</b><br>
                Director <b>Shawn Levy</b><br>
                Writers <b>Matt Lieberman . Zak Penn</b><br>
                Stars <b>Ryan Reynolds, Jodie Comer, Taika Waititi</b>
            </p>
            <div>
                <h2>Top Cast</h2>
                <ul>
                    <li>Ryan Reynolds (Guy)</li>
                    <li>Jodie Comer (Millie)</li>
                    <li> Taika Waititi (Antwan)</li>
                    <li>Lil Rel Howery (Buddy)</li>
                    <li>Joe Keery (Keys)</li>
                </ul>
            </div>
            <div>
                <h2>Reviews</h2>
                <ul>
                    <li>Critic Reviews</li>
                    <li>User Reviews</li>
            </div>
            
            <?php  if (isset($_SESSION['username'])) :; ?>
            <div>
                <p>Submit Your Review</p><br>
                <div class="slidecontainer">
  <input type="range" min="0" max="10" value="5" class="slider" id="myRange">
  <p><span id="demo"></span>/10</p>
</div>

                <div class="comment">
                    <textarea class="comment-area" placeholder="Type your Comment"></textarea>
                </div>
            </div>
            <button class="comment-btn" type="submit"> COMMENT</button>



            <?php endif ?>
    
        <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
        <script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
    
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
        </script>
</body>

<?php
echo file_get_contents("Footer.php")
?>
