<?php
include 'admin.php';
?>


<!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->


<div id="addbtn">
  <button type="submit" name="viewstu" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="displaystudent.php">View Student</a></button>
  <button style="background-color: orange;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
</div>

<div class="disp">

<form id="addstu" action="addmisionmysql.php" method="post">
<h3 class="mb-5 text-uppercase text-center">Student registration form</h3>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="sname">Student name</label>
      <input type="text" class="form-control" name="sname"  placeholder="Enter student name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter father name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="mname">Mother name</label>
      <input type="text" class="form-control" name="mname" placeholder="Enter mother name" required>
    </div>
  </div>

  

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" required>
    </div>
    <div class="form-group col-md-8">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" name="address" placeholder="Apartment, studio, or floor" required>
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
      <select type="select" name="division" class="form-control" required>
      <option>N/A</option> <option>Arts</option> <option>Science</option> <option>Commerce</option> 
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="gender">Gender</label>
      <select type="select" name="gender" class="form-control" required>
      <option>Male</option> <option>Female</option> <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" name="dob" required>
    </div>
  </div>



  <div class="d-inline-block"> 
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
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