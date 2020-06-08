<?php
include("connection.php");
session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($connection,$_POST['email']);
      $mypassword = mysqli_real_escape_string($connection,$_POST['password']);

      $sql = "SELECT * FROM users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connection,$sql);
      // $row = mysqli_fetch_array($result);
      // $active = $row['active'];
      if (!$result) {
      printf("Error: %s\n", mysqli_error($connection));
      exit();
    }
      $count = mysqli_num_rows($result);
      if($count == 1){
        $_SESSION['username'] = $myusername;
        header("location: collections.php");
      }
   }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
   
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


    <div class="col-md-4 col-md-offset-4" id="login"  >
    						<section id="inner-wrapper" class="login">
    							<article>
    								<form action="#" method="post">
                                                                                                                                                    <label>LOGIN</label><br> 
    									<div class="form-group">
    										<div class="input-group">
   											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
    											<input type="email" name="email" class="form-control" placeholder="Email Address">
    										</div>
    									</div>
    									<div class="form-group">
    										<div class="input-group">
    											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
    											<input name="password" type="password" class="form-control" placeholder="Password">
    										</div>
    									</div>
    									  <button name="submit" type="submit" value="Login" class="btn btn-success btn-block">Submit</button>
    								</form>
    							</article>
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


              </div>

  </body>
</html>
