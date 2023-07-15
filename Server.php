<?php
session_start();
$userName='';
$Email='';
$Password='';
$errors=array();
$image='';

//DB connection
$db=mysqli_connect('localhost','root','','movies');  
if ( !$db ) {
    echo mysqli_error( $db );
    throw new Exception( "Database cannot Connect" );
}
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $userName = mysqli_real_escape_string($db, $_POST['username']);
    $Email = mysqli_real_escape_string($db, $_POST['email']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($userName)) { array_push($errors, "Username is required"); }
    if (empty($Email)) { array_push($errors, "Email is required"); }
    if (empty($Password_1)) { array_push($errors, "Password is required"); }
    if ($Password_1 != $Password_2) {
      array_push($errors, "The two passwords do not match");
    }
  
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM members WHERE username='$userName' OR email='$Email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['username'] === $userName) {
        array_push($errors, "Username already exists");
      }
  
      if ($user['email'] === $Email) {
        array_push($errors, "email already exists");
        
      }
    }
      // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $Password = md5($Password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO members (username, email, password) 
              VALUES('$userName', '$Email', '$Password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $userName;
    $_SESSION['success'] = "You are now logged in";
    header('location: Home.php');
}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
$userName = mysqli_real_escape_string($db, $_POST['username']);
$Password = mysqli_real_escape_string($db, $_POST['password']);

if (empty($userName)) {
    array_push($errors, "Username is required");
}
if (empty($Password)) {
    array_push($errors, "Password is required");
}



if (count($errors) == 0) {
    $Password = md5($Password);
    $query = "SELECT * FROM members WHERE username='$userName' AND password='$Password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $userName;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
        array_push($errors, "Wrong username/password combination");
    }
  }
}
if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:sign_in_page.php');
}


if (isset($_POST['movie_add'])) {
  header("Location: Home.php");
}

if (isset($_POST['movie_add']) && isset($_FILES['Movie_poster'])) {
	echo "<pre>"; 
	print_r($_FILES['Movie_poster']);
	echo "</pre>";

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: AdminPage.php?error=$em");
		}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO `movie` (`Movie_Name`, `Movie_Image`)
         VALUES ('$img_name','$new_img_name')";
        
        
        mysqli_query($db , $sql);
				header("Location: AdminPage.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: AdminPage.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: AdminPage.php?error=$em");
	}

}else {

}


?>