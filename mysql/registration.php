<?php

session_start();

$error="";

$con = mysqli_connect('localhost','root');
if(!$con){
    ?>
    <script>
   alert('network disconnected');
  </script>
    <?php
}

mysqli_select_db($con,'phpproject');

$name = $_POST['name'];
$user = $_POST['email'];
$pass = $_POST['pswd'];

$q = "select * from signin where name='$name' &&  email='$user' &&  password='$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    ?>
    <script>
        alert('user allready exitst');
        window.location.href='../signup.php'; 
  </script>
    <?php 
}else{
    $qy = "insert into signin(name,email,password) value('$name' , '$user' , '$pass')";
    mysqli_query($con,$qy);
}

?>