<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background="sand.png">

<body background="collect.jpg">
  <form action="dashboard.php" id="#form" method="post" name="#form">
<input id='btn' name="DASHBOARD" type='submit' value='GO TO DASHBOARD' align=center>

</form>
    <h1 align=center style="font-weight: bold">MY ORDERS</h1>
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

      $q = mysqli_query($connection,"select * from orders where Uid = '$Uid'");
      if($q){
              while($row = mysqli_fetch_array($q)){
                   echo $row['Bid']." ";
                   $Bid = $row['Bid'];
                   $query = mysqli_query($connection,"select * from books where Bid = '$Bid'");
                   while($row2 = mysqli_fetch_array($query)){
                     echo $row2['Author']." ";
                     echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
                     echo $row2['Price'].'<br/>';
                   }
              }
              mysqli_free_result($q);
          }else{
            echo "fail";
        }
    ?>

  </body>
</html>
