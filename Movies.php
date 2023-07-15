<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Movies</title>
    <script src="splide/dist/js/splide.min.js"></script>
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
                            <div class="text">Last Night in Soho <br> Rating: pg13 <br> year: 2021 <br> language:
                                english
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

                        <img src="images/venom2.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Venom <br> Rating: pg13 <br> year: 2021 <br> language: english

                            </div>
                        </div>
                        
                       
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/notimetodie.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">No Time TO Die <br> Rating: pg13 <br> year: 2021 <br> language: english
                            </div>

                        </div>
                        
                       
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/shangchi.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Shang-chi <br> Rating: pg13 <br> year: 2021 <br> language: english
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

    <h1 class="mainheader">Most Popular Movies</h1>

    <div class="splide3">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="col">
                        <img src="images/thegodfather.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">The God Father <br> Rating: pg13 <br> year: 2001 <br> language: english

                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/thething.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">The Thing<br> Rating: pg13 <br> year: 1998 <br> language: english

                            </div>
                        </div>
                    </div>
                <li class="splide__slide">
                    <div class="col">

                        <img src="images/fridaythethirteenth.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">Friday the Thirteenth <br> Rating: pg13 <br> year: 1999 <br> language:
                                english

                            </div>
                        </div>
                    </div>
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
                        </a>
                    </div>

                <li class="splide__slide">

                    <div class="col">

                        <img src="images/thegodfather2.jpg" height=300px width=202px>
                        <div class="overlay">
                            <div class="text">
                                The Godfather 2
                                <br>
                                Rating: pg13
                                <br>
                                release: 2021
                                <br>
                                language: english
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
            //Get the button
            var mybutton = document.getElementById("topBtn")
            window.onscroll = function() {scrollFunction()};
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