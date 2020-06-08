<?php
  $db = mysqli_connect("localhost", "root", "", "mylibrary");

  $msg = "";

  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['desc']);
    $name =  $_POST['bookname'];
    $price=$_POST['price'];
    $author= $_POST['author'];
    $type= $_POST['type'];
  	$target = "image/".basename($image);
  	$sql = "INSERT INTO books VALUES (20,'$name','$author','$type','$price','Desc','$image')";
  	// execute query

  	$current_id = mysqli_query($db, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($db));
    if (isset($current_id)) {
            header("Location: index.php");
        }

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add books</title>

	<!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Space Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

<!-- //Meta-Tags -->

	<!-- css files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- css files -->

	<!-- Online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!-- //Online-fonts -->
<style>

 :-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}
}
::Label {
  color: red;
  opacity: 1; /* Firefox */
}
</style>

</head>
<body>
  <form action="collection2.php" id="#form" method="post" name="#form">
  <input id='btn' name="COLLECTION" type='submit' value='GO TO COLLECTION' align=center>

  </form>
	<!-- Main Content -->
	<div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3"></h1>
			<div class="w3layouts-main">
				<h2><span>Add Book</span></h2>
<div id="content">
  <?php
    // while ($row = mysqli_fetch_array($result)) {
    //   echo "<div id='img_div'>";
    //   	echo "<img src='images/".$row['image']."' >";
    //   	echo "<p>".$row['image_text']."</p>";
    //   echo "</div>";
    // }
  ?>
  <form method="POST" action="#" enctype="multipart/form-data">
  	<input type="text" name="bookname" placeholder="name"><br>
    <input type="text" name="author" placeholder="author"><br>
    <input type="text" name="type" placeholder="type"><br>

    <input type="text" name="price" placeholder="price"><br>
  	<div><br>
<font size="4" color="white">Upload Image </font>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <br><textarea
      	id="text"
      	cols="50"
      	rows="5"
      	name="desc"
      	placeholder="Say something about this book...">Describe book...</textarea>
  	</div><br>
  	<div>
  		<button type="submit" name="upload">ADD</button>
  	</div>
  </form>
</div>


		</div>
	</div>
	<!-- //Main Content -->

</body>
</html>
