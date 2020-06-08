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
  <h1 style="color:blue;" align = center>MY FINES</h1>

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

  $q = mysqli_query($connection,"select * from issue where Uid = '$Uid'");
  $count=0;
  $current_date = date("Y-m-d H:i:s");
  if($q){
          while($row = mysqli_fetch_array($q)){
               $Bid = $row['Bid'];
               $date = $row['IssueDate'];
               $query = mysqli_query($connection,"select * from books where Bid = '$Bid'");
               $diff = abs(strtotime($date) - strtotime($current_date))/60/60/24;
               $diff=floor($diff*10);
               $count+=$diff;
               echo '</br>';
               echo'YOUR FINE ON THIS BOOK:    '.$diff.'.   ';
               while($row2 = mysqli_fetch_array($query)){

                 echo $row2['Author']." ";
                 echo'<img src="data:image/jpg;base64,'.base64_encode( $row2['Image'] ).'"/><br/>';
                  echo '</br>';
                 echo $row2['Price'].'<br/>';

               }
          }
          echo 'TOTAL FINE:  '.$count;
          mysqli_free_result($q);
      }else{

        echo "fail";
    }
?>

</body>
</html>
