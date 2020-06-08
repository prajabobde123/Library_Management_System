<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="x1.css" rel="stylesheet" type="text/css">
      <style>
    body {
        background-image:url("bg.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    html {
        height: 100%
    }

      </style>


    <title></title>
  </head>
  <body>
    <h1 style="color:blue;">DESCRIPTION OF BOOK</h1>
    <?php
    include("connection.php");
    session_start();
    $id = $_GET['id'];
    $_SESSION['id']=$id;
    $query = mysqli_query($connection,"select * from books where Bid='$id'");
    while ($row = mysqli_fetch_array($query)) {
      echo'<img src="data:image/jpg;base64,'.base64_encode( $row['Image'] ).'"/>';
        echo "<br />";
          echo "<br />";
          echo "DESCRIPTION: ";
    echo $row['Desc'];
    echo "<br />";
    }
    ?>
    <br/>
    <form action="../test2.php" method="post">
      <input type="submit" name ="submit" value="Add to cart">
    </form>
    <hr/>
    <form action="../test3.php" method="post">
      <input type="submit" name ="submit" value="Issue Book">
    </form>
  </body>
</html>
