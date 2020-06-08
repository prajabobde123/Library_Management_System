<?php
include("connection.php");
session_start();
$Bid = $_SESSION['id'];
$name = $_SESSION['username'];
$q = mysqli_query($connection,"select * from users where email = '$name'");
if($q){
        while($row = mysqli_fetch_array($q)){
             $Uid = $row['id'] ;
        }
        mysqli_free_result($q);
    }else{

      echo "fail";
    }
$q = mysqli_query($connection,"select * from books where Bid = '$Bid'");
if($q){
      while($row = mysqli_fetch_array($q)){
             $Bid = $row['Bid'] ;
             $Price = $row['Price'];
      }
        mysqli_free_result($q);
    }else{
          echo "fail";
    }
    $Price=$Price + ($Price*0.05);
$query = mysqli_query($connection,"insert into orders (Uid, Bid,Price) values ('$Uid', '$Bid','$Price')");
header("location: ../collections.php");
?>
