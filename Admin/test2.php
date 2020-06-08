
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
$query = mysqli_query($connection,"insert into cart (Uid, Bid) values ('$Uid', '$Bid')");
header("location: collections.php");
 ?>

      <!-- <div class="card 2">
      <div class="card_image">
        <img src="https://images.unsplash.com/photo-1549122728-f519709caa9c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=925&q=80" />
        </div>
      <div class="card_title title-white">
        <p>Card Title</p>
      </div>
    </div>

    <div class="card 3">
      <div class="card_image">
        <img src="https://images.unsplash.com/photo-1569997851406-472ce7b75c6c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
        https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif
      </div>
      <div class="card_title">
        <p>Card Title</p>
      </div>
    </div>

      <div class="card 4">
      <div class="card_image">
        <img src="https://images.unsplash.com/photo-1552647513-6e7cf1a5e3e3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" />
        </div>
      <div class="card_title title-black">
        <p>Card Title</p>
      </div>
      </div> -->
