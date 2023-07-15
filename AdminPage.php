<?php include('Server.php')?>
<!DOCTYPE html>

<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/sign.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">


</head>
<?php  include("topNavL.php");

if (isset($_POST['movie_add'])) {
    header("Location: Home.php");
  }
?>

<body id="main">
    <div id="btngan">
        <section class='login' id='login'>
            <div class='head'>
                <div class='form'>
                        <h1 class='title'>Admin Page</h1>

                        <?php if (isset($_GET['error'])): ?>
                        <p>
                            <?php echo $_GET['error']; ?>
                        </p>
                        <?php endif ?>

                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'Movie')">Add Movie</button>
                            <button class="tablinks" onclick="openCity(event, 'Tv Show')">Add TV Show</button>
                            <button class="tablinks" onclick="openCity(event, 'Celeberty')">Add Celeberty</button>
                        </div>
                        <div id="Movie" class="tabcontent">
                        <form method="post"enctype="multipart/form-data" action="AdminPage.php" >
                            <div class="addMovie">
                                <div class="main__form">
                                    <div class="form-row">
                                        <label class="input">
                                            <input type="text" name="MovieName" placeholder="MovieName" required>
                                        </label>
                                    </div>
                                    <label class="input">
                                        add image for movie
                                        <input type="file" name="Movie_poster" placeholder="Image" class="fileinput"
                                            required>
                                    </label>
                                </div>

                                <label class="input">
                                    add trailer for movie
                                    <input type="file" name="image" placeholder="Movie_Trailer" class="fileinput"
                                        required>
                                </label>
                                <label class="input">
                                    <input type="text" name="Movie_details" placeholder="details">
                                </label>

                                <button type="submit" class="btn-login" id="login" name="movie_add">Add Movie</button>
                            </div>
                            </form> 

                        </div>

                        <div id="Tv Show" class="tabcontent">
                            <div class="addShow">
                                <div class="main__form">
                                    <div class="form-row">
                                        <label class="input">
                                            <input type="text" name="Tv_Show_Name" placeholder="TV Show Name" required>
                                        </label>
                                    </div>
                                    <label class="input">
                                        add image for TV show
                                        <input type="file" name="Tv_Poster" placeholder="Poster" class="fileinput"
                                            required>
                                    </label>
                                </div>

                                <label class="input">
                                    Add Trailer for TV Show
                                    <input type="file" name="Tv_Show_Image" placeholder="Trailer" class="fileinput"
                                        required>
                                </label>
                            </div>
                            <label class="input">
                                <input type="text" name="TVdetails" placeholder="details" required>
                            </label>

                            <button type="submit" class="btn-login" id="login" name="">Add Show</button>
                        </div>
                        <div id="Celeberty" class="tabcontent">
                            <div class="addMovie">
                                <div class="main__form">
                                    <div class="form-row">
                                        <label class="input">
                                            <input type="text" name="CelebName" placeholder="Celeberty Name" required>
                                        </label>
                                    </div>
                                    <label class="input">
                                        Add Image For Celeberty
                                        <input type="file" name="image_Celeb" placeholder="Image" class="fileinput"
                                            required>
                                    </label>
                                    <button type="submit" class="btn-login" id="login" name="login_user">Add
                                        Movie</button>
                                </div>

                                <label class="input">
                                    <input type="text" name="image" placeholder="Movies in" required>
                                </label>
                            </div>
                            <label class="input">
                                <input type="text" name="details" placeholder="details" required>
                            </label>
                            <button type="submit" class="btn-login" id="login" name="login_user">Add Movie</button>
                        </div>
                     
                    </div>
            </div>
    </div>

    </div>
    </section>
    </div>
    <button onclick="topFunction()" id="topBtn" title="Go to top">&#8593</button>
    <script>

        var mybutton = document.getElementById("topBtn");
        window.onscroll = function () { scrollFunction() };
    </script>

    <script>
        function openCity(evt, insertType) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(insertType).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    </form>
</body>

<?php
echo file_get_contents("Footer.php")
?>