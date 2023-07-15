<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Watchlist</title>
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

    <h1 class="mainheader">Movies</h1>


    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/sharknado.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Sharknado <br> Rating:R <br> year: 2010 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/troll2.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Troll 2<br> Rating: pg13 <br> year: 2010 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/shawashankred.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Shawshank Redemption <br> Rating: pg13 <br> year: 2021 <br> language:
                                english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/endgame.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Avenger Endgame<br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/thegodfather.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">The GodFather<br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">

                    <div class="col">

                        <img src="images/inception.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Inception <br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
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



    <h1 class="mainheader">Shows</h1>

    <div class="splide2">
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
        var splide = new Splide('.splide2', {
            type: 'loop',
            perPage: 3,
            perMove: 1,

        });

        splide.mount();
    </script>

    <h1 class="mainheader">Watched</h1>


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

                        <img src="images/fridaythethirteenth.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Friday the Thirteenth <br> Rating: pg13 <br> year: 1999 <br> language:
                                english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/dune.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Dune <br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <a href="SingleMovie.php">
                            <img src="images/freeguy.jpg" height=300px width=202px>
                            <div class="overlay">
                                <div class="text">FreeGuy <br> Rating: pg13 <br> year: 2021 <br> language: english
                                </div>
                            </div>
                        </a>
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


    <h1 class="mainheader">To Be Watched</h1>



    <div class="splide4">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
        <div class="col">

            <img src="images/dune.jpg" height=300px width=202px>
            <div class="overlay">
                <div class="text">Dune <br> Rating: pg13 <br> year: 2021 <br> language: english
                </div>
            </div>
        </div>
                </li>
                
                <li class="splide__slide">

        <div class="col">

            <img src="images/lastnightinsoho.jpg" height=300px width=202px class="image">
            <div class="overlay">
                <div class="text">Last Night in Soho <br> Rating: pg13 <br> year: 2021 <br> language: english
                </div>
            </div>
        </div>
                </li>
                
                <li class="splide__slide">

        <div class="col">

            <img src="images/armyoftheives.jpg" height=300px width=202px>
            <div class="overlay">
                <div class="text">Army of Theives <br> Rating: pg13 <br> year: 2021 <br> language: english
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
        var splide = new Splide('.splide4', {
            type: 'loop',
            perPage: 3,
            perMove: 1,

        });

        splide.mount();
    </script>




    <h1 class="mainheader">For You</h1>




    <div class="splide5">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
        <div class="col">

            <img src="images/dune.jpg" height=300px width=202px>
            <div class="overlay">
                <div class="text">Dune <br> Rating: pg13 <br> year: 2021 <br> language: english
                </div>
            </div>
        </div>
                </li>
                
                <li class="splide__slide">

        <div class="col">

            <img src="images/lastnightinsoho.jpg" height=300px width=202px class="image">
            <div class="overlay">
                <div class="text">Last Night in Soho <br> Rating: pg13 <br> year: 2021 <br> language: english
                </div>
            </div>
        </div>
                </li>
                
                <li class="splide__slide">

        <div class="col">

            <img src="images/armyoftheives.jpg" height=300px width=202px>
            <div class="overlay">
                <div class="text">Army of Theives <br> Rating: pg13 <br> year: 2021 <br> language: english
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
        var splide = new Splide('.splide5', {
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