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


if(isset($_POST['text'])){

$msg=mysqli_real_escape_string($conn,$_POST["text"]);

$query=mysqli_query($conn,"SELECT * FROM questions WHERE question RLIKE '[[:<:]]".$msg."[[:>:]]'");
$count = mysqli_num_rows($query);

    if($count=="0"){

        $data = "I am Sorry but I am not exactly clear how to help you";
        $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')");

    }else{
        while($row = mysqli_fetch_array($query)){

                $data= $row['answer'];

                $query4=mysqli_query($conn,"insert into chats(user,chatbot,date)values('$msg','$data','$server_time')");
            }
        }
}
?>
