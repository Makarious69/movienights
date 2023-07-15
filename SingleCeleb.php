<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Daniel Graig</title>
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/SingleCeleb.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>

<body id="main">
<?php  include("topNavL.php"); ?>
       <div class="container">
        <div class="fullscreen-video">
            <img src="images/DanielCraigback.jpg"   width="100%">
        </div>
        <div class="video-overlay"></div>
   
        <div class="movie-content">
        <h1>Daniel Craig</h1>
        </div>
    </div>
        <br>
        <br>
        
        <div class="movie-details">
            <h2>Biography</h2>
            <p>
                <b>Born: March 2, 1968 (age 53 years), Chester, United Kingdom.</b><br>
                Height: <b>1.78 m</b><br>
                Nationality: <b>English</b><br>
                Spouse: <b>Rachel Weisz (m. 2011), Fiona Loudon (m. 1992–1994)</b>
                Upcoming movie: <b>Knives Out 2</b>
                Children: <b>Ella Craig</b>
            </p>
            <div>
                <h2>Known For</h2>
                <div>
                    <a href="#"><img src="images/notimetodie.jpg" height=200px width=135px></a>
                    <p>No Time To Die</p>
                </div>
            </div>
        </div>

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
