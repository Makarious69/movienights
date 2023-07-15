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
<?php  include("topNavL.php"); ?>
    
    
    <div class="first-scene">
    
        <div class="slideshow-container">
            <div class="mySlides fade">
                <a href="#"><img src="images/slider3.jpg" width=1000px height="550"></a>
                <div class="text-slider">Do you need to watch the first three Matrix films? Here's your spoiler-free
                    guide to the latest installation</div>
            </div>
            <div class="mySlides fade">
                <a href="#"><img src="images/slider2.jpg" width=1000px height="550"></a>
                <div class="text-slider">Watch Leonardo DiCaprio Explain ‘Don’t Look Up’ Real-World Parallels</div>
            </div>
            <div class="mySlides fade">
                <a href="#"><img src="images/slider1.jpg" width=1000px height="550"></a>
                <div class="text-slider">'Spider-Man: No Way Home' is first film to make $1 billion since 2019.</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }
            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
            
        </script>
        <div class="movie-of-the-day">
            <h4>Movie of the day</h4>
            <div class="movie-of-the-day-extended">
                <img src="images/nowayhome.jpg" height=300px width=202px>
                <p class="movie-name">Spider-Man: No Way Home (2021)</p>
                <p class="description">With Spider-Man's identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, 
                    dangerous foes from other worlds start to appear.</p>
            </div>
        </div>
    </div>



    <h2 class="mainheader">What to Watch</h2>
    <h3>Top Rated </h3>
    <div class="flex-grid">


        <div class="col">
            <a href="SingleMovie.php">
                <img src="images/freeguyjpg.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Free Guy <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Free Guy<br><b>7.2</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/notimetodie.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">No Time To Die <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>No Time To Die<br><b>7.6</b></p>
            </a>
        </div>

        <div class="col">
            <a href="SingleTVShow.php">
                <img src="images/squidgame.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Squid Game<br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Squid Game<br><b>8.1</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/endgame.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">End Game<br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Avengers: Endgame<br><b>7.3</b></p>
            </a>
        </div>


        <div class="col">
            <a href="#">
                <img src="images/inception.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Inception <br> Rating: pg13 <br> year: 2012 <br> language: english
                    </div>
                </div>
                <br>
                <p>Inception<br><b>9.3</b></p>
            </a>
        </div>
    </div>

    <h3>Fan Favorites</h3>
    <div class="flex-grid">
        <div class="col">
            <a href="#">
                <img src="images/dune.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Dune <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Dune<br><b>8.3</b></p>
            </a>
        </div>

        <div class="col">
            <a href="SingleMovie.php">
                <img src="images/freeguyjpg.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Free Guy <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Free Guy<br><b>7.2</b></p>
            </a>
        </div>

        <div class="col">
            <a href="SingleTVShow.php">
                <img src="images/squidgame.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Squid Game<br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <br>
                <p>Squid Game<br><b>8.1</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/chernobyl.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Chernobyl<br> Rating: R <br> year: 2019 <br> language: english
                    </div>
                </div>
                <br>
                <p>Chernobyl<br><b>5.3</b></p>
            </a>
        </div>


        <div class="col">
            <a href="#">
                <img src="images/breaking-bad.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">breaking Bad <br> Rating: R <br> year: 2010 <br> language: english
                    </div>
                </div>
                <br>
                <p>Breaking Bad<br><b>8.3</b></p>
            </a>
        </div>
    </div>

    <h2 class="mainheader">Streaming Now</h2>
    <h3>In Theaters</h3>
    <div class="flex-grid">

        <div class="col">
            <a href="#">
                <img src="images/venom.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text"> <br>Venom Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <p>Venom<br><b>6.3</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/endgame.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text"> <br>Avengers:Endgame Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <p>Avengers: Endgame<br><b>7.3</b></p>
            </a>
        </div>


        <div class="col">
            <a href="#">
                <img src="images/inception.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Inception <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <p>Inception<br><b>9.3</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/notimetodie.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">No Time To Die <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <p>No Time To Die<br><b>7.6</b></p>
            </a>
        </div>

        <div class="col">
            <a href="#">
                <img src="images/mako.jpg" height=300px width=202px>
                <div class="overlay">
                    <div class="text">Mako <br> Rating: pg13 <br> year: 2021 <br> language: english
                    </div>
                </div>
                <p>Mako<br><b>8.1</b></p>
            </a>
        </div>
    </div>
    <h2 class="mainheader">Top Box Office</h3>
        <center>
            <p>COMING SOON</p>
        </center>

        <h2 class="mainheader">Get Closer</h2>
        <h3>Top News</h3>
        <div class="flex-grid">
            <div>
                <p>Josh O’Connor and Paul Mescal Set to Star in Historical Romance ‘The History of Sound’</p>
            </div>
            <div>
                <p>Box Office: ‘Dune’ Tops Halloween Heap With $15.5M; ‘Last Night in Soho’ Gets Spooked</p>
            </div>
            <div>
                <p>‘Venom 2’ and ‘No Time to Die’ Help Make October the Biggest Box Office Month of the Year</p>
            </div>
        </div>
        
        <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
        <script>
            //Get the button
            var mybutton = document.getElementById("topBtn")
            window.onscroll = function() {scrollFunction()};
        </script>
            
</body>
<br>
<br>
<br>

    <?php
echo file_get_contents("Footer.php")
?>
