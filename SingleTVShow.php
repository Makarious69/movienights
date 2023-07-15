<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Squid Game (2021)</title>
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
            <video src="videos/squidgame.mp4" autoplay="true" loop="true" width=100% muted></video>
        </div>
        <div class="video-overlay">
        </div>
        <div class="movie-content">
            <h1 class="movie-name">Squid Game</h1>
            <p>2021 . TV Mini-Series</p>

            <div class="movie">
            <div class="movie-poster"><img src="images/squidgame.jpg" height=400px width=270px></div>
                <a class="movie-trailer" href="videos/squidgame.mp4">Trailer</a>
                <?php  if (isset($_SESSION['username'])) :; ?>
                    <a class="add" href="">+</a>
                    <?php endif ?>
            </div>
        </div>
    </div>
    <div class="movie-details">
        <h2>Description</h2>
        <b>Hundreds of cash-strapped players accept a strange invitation to compete in children's games. Inside, a
            tempting prize awaits
            with deadly high stakes. A survival game that has a whopping 45.6 billion-won prize at stake.</b><br>
        Director <b>Hwang Dong-hyuk</b><br>
        Writers <b>Hwang Dong-hyuk</b><br>
        Stars <b>Lee Jung-jae, Park Hae-soo, Greg Chun</b>
        </p>
        <div>
            <h2>Top Cast</h2>
            <ul>
                <li>Lee Jung-jae (Seong Gi-hun)</li>
                <li>Park Hae-soo (Cho Sang-woo)</li>
                <li>Greg Chun (Gi-Hun)</li>
                <li>Jung Hoyeon (Kang Sae-byeok)</li>
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
                <div class="slider">
                    <p>
                        <input type="range" min="1" max="10" value="5" class="slider"> /10
                    </p>
                </div>
                <div class="comment">
                    <textarea class="comment-area" placeholder="Type your Comment"></textarea>
                </div>
            </div>
        <?php endif ?>
    </div>


    <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
        <script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
        </script>
</body>

<?php
echo file_get_contents("Footer.php")
?>
