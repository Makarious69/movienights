<?php include('server.php') ?>
<!DOCTYPE html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="css/HomeStyle.css">
    <link rel="stylesheet" href="Css/sign.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>
<body id="main">
<?php  include("topNavL.php"); ?>
    
<div id="btngan"> 
        <section class='login' id='login'>
            <div class='head'>
            <h1 class='title'>Sign in</h1>
            </div>
            <div class='form'>


              <form method="post" action="sign_in_page.php">
              <?php include('errors.php'); ?>
            <input type="text" placeholder='Username' name="username"required ><br>

            <input type="password" placeholder="Password" class='password' name="password"><br>

            <button type="submit" class="btn-login" id="login" name="login_user">Login</button>

            <a href="sign_up_page.php" class='signup'>Sign up</a>



              </form>
            </div>
          </section>
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