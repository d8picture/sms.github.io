<?php
$con = mysqli_connect('localhost','root');
if(!$con){
    ?>
    <script>
   alert('network disconnected');
  </script>
    <?php
}
mysqli_select_db($con,'phpproject');
session_start();

session_unset();

session_destroy();

header('location:login.php');
