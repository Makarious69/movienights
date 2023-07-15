<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Tv Shows</title>

    <script src="splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="splide/dist/css/splide-core.min.css">
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body id="main">
<?php  include("topNavL.php"); ?>
    <br>
    <br>
    <br>


    <h1 class="mainheader">Top Trending</h1>

    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/Hawkeye.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Hawkeye <br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/dexters.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Dexeter <br> Rating: pg13 <br> year: 2018 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/friends.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text"> Friends <br> Rating: pg13 <br> year: 1999 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/wandavision.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Wandavision <br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>

                <li class="splide__slide">

                    <div class="col">

                        <img src="images/sherlock.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Sherlock <br> Rating: pg13 <br> year: 2017 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/inside_job.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Inside Job<br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,

        });

        splide.mount();
    </script>



    <h1 class="mainheader">Top Rated</h1>
    <div class="splide2">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/avatar.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Avater<br> Rating: pg13 <br> year: 2012 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>


                <li class="splide__slide">
                    <div class="col">

                        <img src="images/chernobyl.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Chernobyl <br> Rating:pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>

                <li class="splide__slide">
                    <div class="col">

                        <img src="images/breaking-bad.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Breaking Bad <br> Rating: pg13 <br> year: 2010 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>

                <li class="splide__slide">
                    <div class="col">

                        <img src="images/wandavision.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Wandavision<br> Rating: pg13 <br> year: 2020 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>

                <li class="splide__slide">
                    <div class="col">

                        <img src="images/friends.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Friends <br> Rating: pg13 <br> year: 1999 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>

                <li class="splide__slide">
                    <div class="col">

                        <img src="images/Cukur.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Çukur <br> Rating: R <br> year: 2017 <br> language: Turkish
                            </div>
                        </div>

                    </div>
                </li>
            </ul>

        </div>
    </div>
    <script>
        var splide = new Splide('.splide2', {
            type: 'loop',
            perPage: 3,
            perMove: 1,

        });

        splide.mount();
    </script>




    <h1 class="mainheader">Most Popular Shows</h1>

    <div class="splide3">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">

                    <a href="SingleTVShow.php">
                        <div class="col">

                            <img src="images/squidgame.jpg" height=300px width=202px>
                            <div class="overlay">
                                <div class="text">Squid Game <br> Rating: R <br> year: 2021 <br> language: english
                                </div>


                            </div>
                    </a>
                </li>

                <li class="splide__slide">

                    <div class="col">

                        <img src="images/gameofthrones.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Game of Thrones <br> Rating: R <br> year: 2011 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/rickandmorty.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Rick and Morty <br> Rating: R <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/loki.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Loki <br> Rating: R <br> year: 2021 <br> language: english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/whatif.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">What If <br> Rating: R <br> year: 2021 <br> language:english
                            </div>
                        </div>

                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/attackontitan.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Attack on Titan <br> Rating: R <br> year: 2012 <br> language:Japanese
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        var splide = new Splide('.splide3', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            
        });
    
        splide.mount();
    </script>
    

    <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
    <script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function () { scrollFunction() };
    </script>
</body>
<br>
<br>

<center>
<?php
echo file_get_contents("Footer.php")
?>
</center>



</php>