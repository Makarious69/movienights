<?php include('server.php')?>
<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="Css/HomeStyle.css">
    <link rel="stylesheet" href="Css/sign.css">
    <script type="text/javascript" src="JavaScript/Home.js"></script>
    <link rel="stylesheet" href="Css/scrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">


</head>
<?php  include("topNavL.php"); ?>

<body id="main">
        <div id="btngan"> 
            <section class='login' id='login'>
                <div class='head'>
                <h1 class='title'>Sign Up</h1>
                </div>


                <div class='form'>
                    <form method="post" action="sign_up_page.php">
                      <?php include('errors.php');?>
                            <input type="text"placeholder='Username' name="username" value="<?php echo $userName;?>" required><br>
                            <input type="text" placeholder='Email' class="email"  name="email" value="<?php echo $Email;?>" required><br>

                           <div class="container">
                                <div class="input-box">
                                    <i class="fa fa-eye-slash show_hide"></i>
                                    <input type="password" placeholder="Password" class='password1'name="password_1" required><br>
                                </div>
                                <div class="indicator">
                                    <div class="icon-text">
                                        <i class="fa fa-exclamation-circle  error_icon"></i>
                                        <p class="text1"></p>
                                    </div>
                                </div>
                            </div>
                                    <input type="password" placeholder="Confirm Password" name="password_2" required><br>
                                
                         
                              <br>
                              <center> <button type="submit" class="btn-login" id='do-login' name="reg_user">Register</button>  </center>
  	</div>
                            
                          
                  </form>
                </div>

                <script>
                    const input = document.querySelector(".password1"),
                          showHide = document.querySelector(".show_hide"),
                          indicator = document.querySelector(".indicator"),
                          iconText = document.querySelector(".icon-text"),
                          text = document.querySelector(".text1");
                  
                    // js code to show & hide password
                    showHide.addEventListener("click", ()=>{
                      if(input.type == "password"){
                        input.type = "text";
                        showHide.classList.replace("fa-eye-slash","fa-eye");
                      }
                      else {
                        input.type = "password";
                        showHide.classList.replace("fa-eye","fa-eye-slash");
                      }
                    });
                  
                    // js code to show password strength (with regex)
                  
                    let alphabet = /[a-zA-Z]/, //letter a to z and A to Z
                        numbers = /[0-9]/, //numbers 0 to 9
                        scharacters = /[!,@,#,$,%,^,&,*,?,_,(,),-,+,=,~]/; //special characters
                  
                    input.addEventListener("keyup", ()=>{
                      indicator.classList.add("active");
                  
                      let val = input.value;
                      if(val.match(alphabet) || val.match(numbers) || val.match(scharacters)){
                        text.textContent = "Password is weak";
                      }
                      if(val.match(alphabet) && val.match(numbers) && val.length >= 6){
                        text.textContent = "Password is medium";
                      }
                      if(val.match(alphabet) && val.match(numbers) && val.match(scharacters) && val.length >= 8){
                        text.textContent = "Password is strong";
                      }
                      if(val == ""){
                        indicator.classList.remove("active");
                      }
                    }
                  );
                </script>
              
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
