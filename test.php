
<?php
// $connection = mysqli_connect("localhost", "root", "","myLibrary");
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }
// if($stmt = $connection->query("SELECT * FROM books")){
//
//   echo "No of records : ".$stmt->num_rows."<br>";
//
// while ($row = $stmt->fetch_assoc()) {
// echo "
// <br>$row[Author]<br>$row[Bid]";
// echo'<img src="data:image/jpg;base64,'.base64_encode( $row['Image'] ).'"/>';
//   }
//
// }else{
// echo $connection->error;
// }
?>

<?php
 // mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>/* ============================================================
  PRIMARY STRUCTURE
============================================================ */
.container {
  max-width: 960px;
  margin: 0 auto;
}
/* ============================================================
  SECTIONS
============================================================ */
section.module:last-child {
  margin-bottom: 0;
}
section.module h2 {
  margin-bottom: 40px;
  font-family: "Roboto Slab", serif;
  font-size: 30px;
}
section.module p {
  margin-bottom: 40px;
  font-size: 16px;
  font-weight: 300;
}
section.module p:last-child {
  margin-bottom: 0;
}
section.module.content {
  padding: 40px 0;
}
section.module.parallax {
  height: 600px;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
section.module.parallax h1 {
  color: rgba(255, 255, 255, 0.8);
  font-size: 48px;
  line-height: 600px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
section.module.parallax-1 {
  background-image: url("Ancient/Ancient1.jpg");
}
section.module.parallax-2 {
  background-image: url("Ancient/Ancient2.jpg");
}
section.module.parallax-3 {
  background-image: url("Ancient/Ancient3.jpg");
}

@media all and (min-width: 600px) {
  section.module h2 {
    font-size: 42px;
  }
  section.module p {
    font-size: 20px;
  }
  section.module.parallax h1 {
    font-size: 96px;
  }
}
@media all and (min-width: 960px) {
  section.module.parallax h1 {
    font-size: 160px;
  }
}
</style>
</head>
<body>
  <section class="module parallax parallax-1">
  <div class="container">
    <h1>Serene</h1>
  </div>
</section>

<section class="module content">
  <div class="container">
    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
  </div>
</section>

<section class="module parallax parallax-2">
  <div class="container">
    <h1>Rise</h1>
  </div>
</section>

<section class="module content">
  <div class="container">
    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
  </div>
</section>

<section class="module parallax parallax-3">
  <div class="container">
    <h1>Calm</h1>
  </div>
</section>

<section class="module content">
  <div class="container">
    <h2>Lorem Ipsum Dolor</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
  </div>
</section>
</body>
</html>
