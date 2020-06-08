<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="x1.css" rel="stylesheet" type="text/css">
<style>
body {
    background-image:url("collect.jpg");
    background-repeat: repeat-y;
    background-size: 100% 100%;
}
html {
    height: 100%
}

  </style>
</head>

<body background="collect.jpg">
  <form action="dashboard.php" id="#form" method="post" name="#form">
<input id='btn' name="DASHBOARD" type='submit' value='GO TO DASHBOARD' align=center>

</form>
    <div id="gridview">
        <div class="heading">WELCOME TO THE LIBRARY</div>

        <?php if($stmt = $connection->query("SELECT * FROM books")){

          while ($row = $stmt->fetch_assoc()) {?>
            <?php echo "<a href='desc.php/?id={$row['Bid']}'>"?>

                  <?php echo'<img src="data:image/jpg;base64,'.base64_encode( $row['Image'] ).' "/>';?>

                <p style="color:red;" >
                  <?php
                    echo $row['Name'];
                  ?>
                </p>

            </a>

            <?php
            }
          }else{
          echo $connection->error;
          }
          ?>

    </div>
</body>

</html>
<?php
 mysqli_close($connection);
?>
