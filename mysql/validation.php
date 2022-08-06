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


$user = $_POST['email'];
$pass = $_POST['pswd'];

$q = "select * from signin where email='$user' &&  password='$pass' ";

$result = mysqli_query($con,$q);

if(mysqli_num_rows($result) > 0){

    while($row=mysqli_fetch_assoc($result)){

        session_start();
        $_SESSION["username"]=$row['email'];
        $_SESSION["pasword"]=$row['password'];
        header('location:../adminpanel/dashboard.php');

    }
}else{  
    ?>
        <script>
            alert('Sorry Email id & Password does not matched..! Please enter correct email and password');
            window.location.href='../login.php'; 
      </script>
        <?php 
   
}

?>