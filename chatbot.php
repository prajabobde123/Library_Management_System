<?php

      $servername="localhost";
      $username="root";
      $password="";
      $dbname="chatbot";

      $server_time=date("Y-m-d H:i:s");

      $conn=mysqli_connect($servername,$username,$password,$dbname);

      if($conn){

          echo "Connected";

      }else{

          echo "Failed to Connect";
    }

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.container1 img {
  float: left;
  max-width: 50px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

div.sticky {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  margin-top: 200px;
  background-color: #ddd;
  padding: 10px 0 0 10px;
  font-size: 20px;
}
.square {
  height: auto;
  width: 810px;
  padding: 8px;
  background-color: #fff;
  border: 2px solid #dedede;

}
</style>
</head>
<body background="sand.png">

<body background="collect.jpg">
  <form action="dashboard.php" id="#form" method="post" name="#form">
<input id='btn' name="DASHBOARD" type='submit' value='GO TO DASHBOARD' align=center>

</form>
  <h1 style="color:white;" align = center>CHAT</h1>
<div id="refresh">
<div class="square">
<center><h2>Chat Messages</h2></center>
<br/>
  <?php
    $query="select * from chats ORDER by date DESC";
    $res=mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($res)){
      $user=$data['user'];
      $chatbot=$data['chatbot'];
      $date=$data['date'];
  ?>
  <div class="container1" style="margin-right: 400px;">

    <p id="message"><?php echo $user;?></p>
    <span class="time-right"><?php echo $date;?></span>
  </div>

  <div class="container1 darker" style="margin-left: 400px;">

    <p><?php echo $chatbot;?></p>
    <span class="time-left"><?php echo $date;?></span>
  </div>

<?php } ?>
<div class="sticky">
  <div class="row">
     <div class="col-md-12">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="msg">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" onclick="send()">Send</button>
            </div>
        </div>
   </div>
  </div>
</div>
</div>
</div>
<br/>

<script type="text/javascript">
  function send(){
    var text=$('#msg').val().toLowerCase();

     $.ajax({
                type:"post",
                url:"mysearch.php",
                data:{text:text},
                success:function(data){
                    $('#refresh').load(' #refresh');
                }

      });
  }
</script>

</body>
</html>
