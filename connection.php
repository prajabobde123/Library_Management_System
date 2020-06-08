<?php
$connection = mysqli_connect("localhost", "root", "","mylibrary");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();

}
else{
echo $connection->error;
}
?>

<?php
 // mysqli_close($connection);
?>
