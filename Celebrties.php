<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Celebrties</title>

    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/celebs.css">
    
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>

<body id="main">
<?php  include("topNavL.php"); ?>
    
    <center>
        <h1>Celebrities</h1>
    </center>

        <table>
            <tr>
                
                <td>
                   
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                  <img src="images/DanielCraig.jfif" height=180px width=200px style=" border-radius:50%">
                            </div>
                    <div class="back">
                        <a href="SingleCeleb.php">
                    <h2>Daniel Craig</h2>
                </a>
                </div>
                </div>
                </div>
          
                </td>
                <td>
                    
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                        <img src="images/RamiMalek.jfif" height=180px width=200px style=" border-radius:50%" />
                        </div>
                        <div class="back">
                        <a href="SingleCeleb.php">
                        <h2>Rami Malek</h2>
                    </a>
                </div>
                </div>
                </div>
          <br>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                    <img src="images/TomHardy.jfif" height=180px width=200px style=" border-radius:50%" />
                </div>
                <div class="back">
                    <a href="">
                    <h2>Tom Hardy</h2>
                </a>
            </div>
            </div>
            </div>
                </td>
                <td>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                     <img src="images/AnyaTaylor-Joy.jpg" height=180px width=200px style=" border-radius:50%" />
                    </div>
                    <div class="back">
                        <a href="">
                    <h2>Anya Taylor-Joy</h2>
                </a>
            </div>
            </div>
            </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                    <img src="images/Zendaya.jfif" height=180px width=200px style=" border-radius:50%" />
                            </div>
                    <div class="back">
                        <a href="">
                    <h2>Zendaya</h2>
                </a>
            </div>
            </div>
            </div>
                </td>
                <td>
        
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                    <img src="images/RyanReynolds.jpg" height=180px width=200px style=" border-radius:50%" />
                </div>
                <div class="back">
                    <a href="">

                    <h2>Ryan Reynolds</h2>
                </a>
            </div>
            </div>
            </div>
                </td>
            </tr>
        </table>
        <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
        <script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
        </script>
</body>
<center>
<?php
echo file_get_contents("Footer.php")
?>
</center>