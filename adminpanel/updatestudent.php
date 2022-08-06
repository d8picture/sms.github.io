<?php
include 'admin.php';
?>
<?php
include 'allconn.php';

$id=$_GET['updateid'];

$sql="Select * from crud where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uname=$row['Name'];
$ufname=$row['Fname'];
$umname=$row['Mname'];
$umobile=$row['Mobile'];
$uaddress=$row['Address'];
$uclass=$row['Class'];
$udivision=$row['Division'];
$ugender=$row['Gender'];
$udob=$row['Dob'];

if(isset($_POST['update'])){
    $csname=$_POST['sname'];
    $cfname=$_POST['fname'];
    $cmname=$_POST['mname'];
    $cmobile=$_POST['mobile'];
    $caddress=$_POST['address'];
    $cclass=$_POST['class'];
    $cdivision=$_POST['division'];
    $cgender=$_POST['gender'];
    $cdob=$_POST['dob'];

    $sql="update crud set id=$id,Name='$csname',Fname='$cfname',Mname='$cmname',Mobile='$cmobile',Address='$caddress',Class='$cclass',Division='$cdivision',Gender='$cgender',Dob='$cdob'
    where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert('update success');
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

?>


<div id="addbtn" >
  <button type="submit" name="viewstu" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="displaystudent.php">View Student</a></button>
  <button style="background-color: orange;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
</div>

<div class="disp">

<form id="addstu" method="POST">
<h3 class="mb-5 text-uppercase text-center">Update Students Informations</h3>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="sname">Student name</label>
      <input type="text" class="form-control" name="sname" value="<?php echo $uname; ?>"  placeholder="Enter student name" />
    </div>
    <div class="form-group col-md-4">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname"  value="<?php echo $ufname; ?>" placeholder="Enter father name" />
    </div>
    <div class="form-group col-md-4">
      <label for="mname">Mother name</label>
      <input type="text" class="form-control" name="mname" value="<?php echo $umname; ?>" placeholder="Enter mother name" />
    </div>
  </div>

  

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" value="<?php echo $umobile; ?>" placeholder="Enter mobile number" />
    </div>

    <div class="form-group col-md-8">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" name="address" value="<?php echo $uaddress; ?>" placeholder="Apartment, studio, or floor" />
    </div>
  </div>
  

  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="class">Class</label>
      <select type="select" name="class" class="form-control" required>
        <option value="" selected disabled>select class</option>
        <?php
        $conn = new mysqli('localhost','root','','phpproject');
        if(!$conn){
             ?>
            <script>
           alert('network disconnected');
          </script>
            <?php
        }

        $sql = "SELECT * FROM class";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <option><?php echo $row['cname']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="division">Division</label>
      <select type="select" name="division" value="<?php echo $udivision; ?>" class="form-control" >
      <option>N/A</option> <option>Arts</option> <option>Science</option> <option>Commerce</option> 
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="gender">Gender</label>
      <select type="select" name="gender" value="<?php echo $ugender; ?>" class="form-control" >
      <option>Male</option> <option>Female</option> <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="dob">DOB</label>
      <input type="date" class="form-control" name="dob" value="<?php echo $udob; ?>" />
    </div>
  </div>



  <div class="d-inline-block"> 
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    <button type="submit" name="cancel" class="btn btn-danger"><a style="text-decoration:none;" class="text-light" href="displaystudent.php">Cancel</a></button>
  </div>
</form>


</div>   <!-- END MAIN PAGE -->


</div><!-- closing div of mai section which is set in admin page -->

 <!-- footer start  -->
 <div class="mainn">
  <footer> <p>©Copyright 2021-22. All Rights Reserve</p>
</footer>
  <div>
<!-- footer end  -->



</body>
</html>
