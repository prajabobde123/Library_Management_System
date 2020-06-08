<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body background="lib.jpg">

<body background="collect.jpg">
  <form action="dashboard.php" id="#form" method="post" name="#form">
<input id='btn' name="DASHBOARD" type='submit' value='GO TO DASHBOARD' align=center>

</form>
<h1 style="color:blue;" align = center>RECOMMENDATIONS</h1>

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
$ancient=0;
$cs = 0;
$ficbook = 0;
$Ancient="Ancient";
$Cs="CS";
$Fic="Fiction Book";

$query = mysqli_query($connection,"SELECT * FROM orders WHERE Uid ='".$Uid."'" );
if($query){
        while($row = mysqli_fetch_array($query)){
             $Bid = $row['Bid'];
             $q = mysqli_query($connection,"select * from books where Bid = '$Bid'");
             while($row2 = mysqli_fetch_array($q)){
               echo $row2['Type'].'<br/>';
               switch ($row2['Type']) {
                case "Ancient":
                    $ancient+=1;
                    break;
                case "CS":
                    $cs+=1;
                    break;
                case "Fiction Book":
                    $ficbook+=1;
                    break;
            }
        }
      }
}
echo $ancient .' '. $cs.' '.$ficbook;
if($ancient>=$cs && $ancient>=$ficbook){
  $query = mysqli_query($connection,"SELECT * FROM books WHERE Type ='".$Ancient."'" );
  while($row2 = mysqli_fetch_array($query)){
    echo $row2['Author']." ";
    echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
    echo $row2['Price'].'<br/>';
  }

}
if($cs>=$ancient && $cs>=$ficbook){
  $query = mysqli_query($connection,"SELECT * FROM books WHERE Type ='".$Cs."'" );
  while($row2 = mysqli_fetch_array($query)){
    echo $row2['Author']." ";
    echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
    echo $row2['Price'].'<br/>';
  }
}
  if($ficbook>=$cs && $ficbook>=$ancien){
    $query = mysqli_query($connection,"SELECT * FROM books WHERE Type ='".$Fic."'" );
    while($row2 = mysqli_fetch_array($query)){
      echo $row2['Author']." ";
      echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
      echo $row2['Price'].'<br/>';
    }
  }
?>
</body>
</html>
