<?php

session_start();



$con = mysqli_connect('localhost','root','');
if(!$con){
    ?>
    <script>
   alert('network disconnected');
  </script>
    <?php
}

mysqli_select_db($con,'phpproject');



if(isset($_POST['Csubmit'])){

    $user=$_POST['name'];
    $gmail=$_POST['email'];
    $phone=$_POST['number'];
    $sub=$_POST['subject'];
    $add=$_POST['address'];
    

    
    $sql="insert into contactus(name,email,number,subject,address)
    values('$user','$gmail','$phone','$sub','$add')";
    $result=mysqli_query($con,$sql);
    if($result){
        ?>
        <script>
            alert('MESSAGE SUCCESSFULLY SENT...');
            window.location.href='../home.php'; 
      </script>
        <?php 
        
    }else{
        ?>
        <script>
        alert('error');
       </script>
         <?php
    }
    
}


?>
   