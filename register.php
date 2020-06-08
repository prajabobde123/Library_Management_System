<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>

    <link rel="stylesheet" href="style1.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style media="screen">

body {
 

  background-image: url(lib.jpg);
}
#login {
-webkit-perspective: 1000px;
-moz-perspective: 1000px;
perspective: 1000px;
margin-top:50px;
margin-left:30%;
}
.login {
font-family: 'Josefin Sans', sans-serif;
-webkit-transition: .3s;
-moz-transition: .3s;
transition: .3s;
-webkit-transform: rotateY(40deg);
-moz-transform: rotateY(40deg);
transform: rotateY(40deg);
}
.login:hover {
-webkit-transform: rotate(0);
-moz-transform: rotate(0);
transform: rotate(0);
}
.login article {

}
.login .form-group {
margin-bottom:17px;
}
.login .form-control,
.login .btn {
border-radius:0;
}
.login .btn {
text-transform:uppercase;
letter-spacing:3px;
}
.input-group-addon {
border-radius:0;
color:#fff;
background:#f3aa0c;
border:#f3aa0c;
}
.forgot {
font-size:16px;
}
.forgot a {
color:#333;
}
.forgot a:hover {
color:#5cb85c;
}

#inner-wrapper, #contact-us .contact-form, #contact-us .our-address {
  color: #1d1d1d;
  font-size: 19px;
  line-height: 1.7em;
  font-weight: 300;
  padding: 50px;
  background: #fff;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  margin-bottom: 100px;
}
.input-group-addon {
  border-radius: 0;
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;
  color: #fff;
  background: #f3aa0c;
  border: #f3aa0c;
      border-right-color: rgb(243, 170, 12);
      border-right-style: none;
      border-right-width: medium;
}
</style>
  </head>
  <body>
 <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="Logo\logo.png" alt="LOGO" style="max-width:22%;" class="center"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="aboutUs.html">About</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>

                </ul>
            </div>
  <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
    <div style="height: 300px">
        <!-- just to make scrolling effect possible -->

    <div class="col-md-4 col-md-offset-4" id="login">
    						<section id="inner-wrapper" class="login">
    							<article>
    								<form action="#" method="post">
              								<label>REGISTER</label>
    									<div class="form-group">
    										<div class="input-group">
    											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
    											<input name="username" type="text" class="form-control" placeholder="Name">
    										</div>
    									</div>
    									<div class="form-group">
    										<div class="input-group">
    											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
    											<input name="email" type="email" class="form-control" placeholder="Email Address">
    										</div>
    									</div>
    									<div class="form-group">
    										<div class="input-group">
    											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
    											<input name="password_1" type="password" class="form-control" placeholder="Password">
    										</div>
    									</div>
    									<div class="form-group">
    										<div class="input-group">
    											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
    											<input name="password_2" type="password" class="form-control" placeholder="Confirm Password">
    										</div>
    									</div>
    									  <input name="reg_user" type="submit" class="btn btn-success btn-block">
    								</form>
    							</article>
    						</section>
              </div>
    						</section>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
 
  </body>
</html>

<?php
$errors = array();
  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<?php
include("connection.php");
// REGISTER USER


if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($connection, $query);
  	$_SESSION['username'] = $username;
  	header('location: index.php');
  }
}

?>


