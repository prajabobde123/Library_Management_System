<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body background="light.jpg">

<body background="collect.jpg">
  <form action="dashboard.php" id="#form" method="post" name="#form">
<input id='btn' name="DASHBOARD" type='submit' value='GO TO DASHBOARD' align=center>

</form>
    <h1 style="color:blue;" align = center>MY CART</h1>
  </br>
<?php
include("connection.php");
session_start();
$username = $_SESSION['username'];
$q = mysqli_query($connection,"select * from users where email = '$username'");
if($q){
        while($row = mysqli_fetch_array($q)){
             $Uid = $row['id'] ;
        }
        mysqli_free_result($q);
    }else{
      echo "fail";
  }

  $q = mysqli_query($connection,"select * from cart where Uid = '$Uid'");
  if($q){
          while($row = mysqli_fetch_array($q)){
               echo $row['Bid']." ";
               $Bid = $row['Bid'];
               $query = mysqli_query($connection,"select * from books where Bid = '$Bid'");
               while($row2 = mysqli_fetch_array($query)){
                 echo $row2['Author']." ";
                 echo "<a href='test4.php/?id={$row['Bid']}'>";
                 echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
                 echo $row2['Price'].'<br/>';
                 echo "Place Your Order";
                 echo "</a>";
               }
          }
          mysqli_free_result($q);
      }else{

        echo "fail";
    }
?>


  </body>
</html>
