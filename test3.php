<?php
include("connection.php");
session_start();
$Bid = $_SESSION['id'];
$name = $_SESSION['username'];
$current_date = date("Y-m-d H:i:s");
$q = mysqli_query($connection,"select * from users where email = '$name'");
if($q){
        while($row = mysqli_fetch_array($q)){
             $Uid = $row['id'] ;
        }
        mysqli_free_result($q);
    }else{

      echo "fail";
    }
$query = mysqli_query($connection,"insert into issue (Uid, Bid,IssueDate) values ('$Uid', '$Bid','$current_date')");
header("location: collections.php");
 ?>
