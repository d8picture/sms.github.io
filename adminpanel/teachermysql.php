<?php
include 'allconn.php';
?>
<?php
if(isset($_POST['submit'])){
    
    $cename=$_POST['ename'];
    $cfname=$_POST['fname'];
    $cmobile=$_POST['mobile'];
    $cgender=$_POST['gender'];
    $cage=$_POST['age'];
    $csubject=$_POST['subject'];
    $caddress=$_POST['address'];
    
    
   
    
   
   

    $sql="insert into teacher(Name,Fname,Mobile,Gender,Age,Subject,Address)
    values('$cename','$cfname','$cmobile','$cgender','$cage','$csubject','$caddress')";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert('NEW TEACHER ADDED SUCCESS');
             window.location.href='displayteacher.php'; 
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
 mysqli_close($conn);

?>