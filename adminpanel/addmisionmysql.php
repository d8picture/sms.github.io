<?php
include 'allconn.php';
?>
<?php
if(isset($_POST['submit'])){
    
    $csname=$_POST['sname'];
    $cfname=$_POST['fname'];
    $cmname=$_POST['mname'];
    $cmobile=$_POST['mobile'];
    $caddress=$_POST['address'];
    $cclass=$_POST['class'];
    $cdivision=$_POST['division'];
    $cgender=$_POST['gender'];
    $cdob=$_POST['dob'];
   
   
   

    $sql="insert into crud(Name,Fname,Mname,Mobile,Address,Class,Division,Gender,Dob)
    values('$csname','$cfname','$cmname','$cmobile','$caddress','$cclass','$cdivision','$cgender','$cdob')";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert('NEW STUDENT ADDED SUCCESS');
            window.location.href='displaystudent.php'; 
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