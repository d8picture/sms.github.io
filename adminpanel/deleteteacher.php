<?php
include 'allconn.php';
if(isset($_GET['deleteid'])){

$id=$_GET['deleteid'];

$sql="delete from teacher where id=$id";

$result = mysqli_query($conn,$sql);
if($result){
     ?>
    <script>
        alert('ARE YOU SURE FOR DELETING EMPLOYEES DATA...?');
   window.location.href='displayteacher.php'; 
  </script>
    <?php 
	
}
else{
	
	?>
	<script>
	alert('network disconnected');
   </script>
	 <?php

}


}

?>


   