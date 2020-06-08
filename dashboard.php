<?php
include("connection.php");
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <style>
  body{
  font-family: 'lato' !important;
  background-color: white;
}

/*navbar start*/

@media(min-width:768px) {

body {
  margin-top: 50px;
}
}

#wrapper {
  padding-left: 0;
}

#page-wrapper {
  width: 100%;
  padding: 0;
}

/* Side Navigation */

@media(min-width:768px) {

#wrapper {
  padding-left: 225px;
}

#page-wrapper {
  padding: 2px 10px;
}

.side-nav {
  position: fixed;
  top: -21px;
  left: 225px;
  width: 225px;
  margin-left: -225px;
  border: none;
  border-radius: 0;
  overflow-y: auto;
  background-color: #313131;
  bottom: 0;
  overflow-x: hidden;
  padding-bottom: 40px;
  margin-top: 20px;
}

.side-nav>li>a {
  width: 225px;
  border-bottom: 1px solid #6C7278;
  margin-top: 15px;
}
}

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
  border-color: #616060 !important;
}

.navbar-ex1-collapse{
  background-color: #fff;
}

.logostyle{
  width: 50%;
  max-width: 186px;
  margin-top: 10px;
  margin-left: 55px;
}

.navbar-inverse .navbar-nav > li > .active{
  border-left: 3px solid white;
}

.nav > li > a {
  position: relative;
  display: block;
  padding: 12px 15px;
  margin-right: 15px;
}

.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
  background-color: transparent;
  border-color: white;
}

a {
  color: white !important;
  text-decoration: none;
}

.form-control-serch {
  height: 32px;
  padding: 0px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 0px 22px 22px 0px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

.search-btn-icon{
  background-color: #fff;
  border:1px solid #E8E8E8;
  border-right: transparent !important;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  height: 32px;
  margin-left: 200px;
}

.search-box{
  border-left:transparent !important;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
  border:1px solid #E8E8E8;
  height: 32px;
}

.fasett {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 25px;
  text-rendering: auto;
  color: white;
  margin-top: 10px;
  margin-right: 30px;
  cursor: pointer;
}

a:hover {
  background-color: transparent !important;
}

.editpro h5 {
  margin-right: 15px;
  margin-top: 15px;
  color: white;
}

/*navbar end*/
@media screen and (max-device-width: 640px) {

.search-btn-icon{
  background-color: #fff;
  border:1px solid #E8E8E8;
  border-right: transparent !important;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
  height: 32px;
  margin-left: 115px;
}

.editpro h5 {
    margin-right: 12px;
    margin-top: 15px;
    color: white;
    margin-left: 158px;
}

.dashhead h1{
   margin-top: 180px;
}
}

body {
    background-image:url("lib.jpg");
    background-repeat: repeat-y;
    background-size: 100% 100%;
}
html {
    height: 100%
}

  </style>
  <body>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>

<div id="wrapper">

    <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->


        <form style="margin-left: 300px;" method='post' action="#" class="navbar-form navbar-left">
            <input name="search" type="text" placeholder="Check availability">
            <input name="submit" type="submit" value="Check">
        </form>


        <div class="items">
          <ul class="nav navbar-right top-nav">
            <li class="editpro">
              <i class="fasett fa-cog" aria-hidden="true" class="menu-button" id="menu-button"></i>
              <h5 class="pull-left login-person-head">Welcome <?php echo $username; ?> </h5>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #616060; border:1px solid #616060;">
            <ul class="nav navbar-nav side-nav">
              <a href="#"><img class="logostyle" src="Logo/logo.png" alt="LOGO"></a>
              <li>
                  <a class="#" href="issue.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-envelope" aria-hidden="true"></i>  <span style="color:white;"> Issued </span></a>
              </li>
                <li>
                   <a class="active" href="cart.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home" aria-hidden="true"></i>   <span style="color:white;">  Cart </span></a>
                </li>
                <li>
                    <a class="#" href="fine.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-user-o" aria-hidden="true"></i>   <span style="color:white;">  Fines </span></a>
                </li>
                <li>
                    <a class="order.php" href="order.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-calendar" aria-hidden="true"></i>   <span style="color:white;"> MyOrders </span></a>
                </li>
                <li>
                    <a class="#" href="recommendation.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-envelope" aria-hidden="true"></i>  <span style="color:white;"> MyRecomendations </span></a>
                </li>
                <li>
                    <a class="#" href="chatbot.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-envelope" aria-hidden="true"></i>  <span style="color:white;">ChatBot </span></a>
                </li>
                <li>
                    <a class="#" href="logout.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-cogs" aria-hidden="true"></i>   <span style="color:white;"> Logout </span></a>
                </li>
            </ul>
        </div>

  </nav>


<div class="container-fluid">
<div class="row text-center">
<div class="col-md-12 dashhead">
<h1 style="color:white;"> LIB WELCOMES YOU </h1>
</div>
</div>
</div>
<?php if(isset($_POST['submit'])){
  $bookName = $_POST['search'];
  $q = mysqli_query($connection,"select * from books where Name = '$bookName'");
  if($q){
    $row = mysqli_num_rows($q);
    if($row>0){
      $Color = "red";
    $Text = "AVAILABLE";

    echo '<div style="Color:'.$Color.'">'.$Text.'</div>';

      echo $row;
    }
    else{
      $Color = "red";
    $Text = "NOT AVAILABLE";

    echo '<div style="Color:'.$Color.'">'.$Text.'</div>';
    }

  }

}
 ?>

   <?php
   $sql = "SELECT distinct(Type) FROM books";
   $result = mysqli_query($connection,$sql);
?>
</hr>
<form action="#" method="post">
  <?php
  echo "<select name='Type'>";
  while ($row = mysqli_fetch_array($result)) {
      echo "</hr>";
      echo "</hr><option value='" . $row['Type'] . "'>" . $row['Type'] . "</option>";
      echo "</br>";
  }
  echo "</select>";

  ?>
</hr>

<input type="submit" name="submit2" value="filter">
</form>
<?php if(isset($_POST['submit2'])){
  $Type = $_POST['Type'];
  $q = mysqli_query($connection,"select * from books where Type = '$Type'");
  echo "</br>";
  echo "</br>";
  echo "</br>";
  while ($row = mysqli_fetch_array($q)) {
    echo'<img src="data:image/jpg;base64,'.base64_encode( $row['Image'] ).'"/>';
    echo "</br>";
    echo "</br>";
  echo $row['Desc'];
  echo "<br />";
  }
}
 ?>

  </div>

</body>
</html>
