
<?php

$conn = mysqli_connect('localhost','root');
if(!$conn){
    ?>
    <script>
   alert('network disconnected');
  </script>
    <?php
}

mysqli_select_db($conn,'phpproject');



if(isset($_POST['submit'])){
    
    $csname=$_POST['sname'];
    $cfname=$_POST['fname'];
    $cmname=$_POST['mname'];
    $cdob=$_POST['date'];
    $cmobile=$_POST['mobile'];
    $caddress=$_POST['address'];
    $cgender=$_POST['gender'];
    $cclass=$_POST['class'];
    $cdivision=$_POST['division'];

    $sql="insert into crud(name,fname,mname,dob,mobile,address,gender,class,division,status)
    values('$csname','$cfname','$cmname','$cdob','$cmobile','$caddress','$cgender','$cclass','$cdivision','pending')";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
       alert('Your registration request successfully sent.');  
       window.location.href='home.php';
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



<!doctype html>
<html lang="en">

<head>
    <!--==============================  meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================ css & bootstrap =======================================-->
   <link rel="stylesheet" href="css/bootstraapp.minn.css">
   
   

   <style>
       *{
           padding: 0%;
           margin: 0%;
           box-sizing: border-box;
       }
      body{
            background-color: #F1F5FE;
      }

      #addstu{/*****form div under the adm main div  ****** */
         
         
      
          padding: 20px;
        
          
      }
      #imag{
          height: 80vh;
          padding: 20px;
    }
      #ft{/***footer*** */
    width: 100%;
    height: 70px;
    position: fixed;
    bottom: 0%;
    box-shadow: 0px 2px 8px 0px black;
    
  }/*
  .adm{ 
      margin-top: 10px;  
      width: 100%;
      height: 80vh;
      position: fixed;
      overflow: auto;
  }
  .adm form{
      width: 50%;
      float: left;
    
  }
  .adm img{
      width: 50%;
      height: 100vh;
      float: right;
  }
*/
.containe{
    margin-top: 10px;  
      width: 100%;
      height: 80vh;
      position: fixed;
      overflow: auto;
    
    
}
.leftdiv{
    width: 50%;
    float: right;

}
.rightdiv{
    width: 50%;
    float: left;

}
.rightdiv img{
    width: 100%;
   
}

  
</style>
</head>
<body>
    <div class="containe">
<div class="leftdiv">
<form id="addstu" action="" method="post">
<h3 class="mb-5 text-uppercase text-center">Student registration form</h3>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sname">Student name</label>
      <input type="text" class="form-control" name="sname"  placeholder="Enter student name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter father name" required>
    </div>
   </div>
    

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="mname">Mother name</label>
      <input type="text" class="form-control" name="mname" placeholder="Enter mother name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" required>
    </div>
  </div>
  
 <div class="form-row">
  <div class="form-group col-md-6">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" name="address" placeholder="Apartment, studio, or floor" required>
    </div>
    <div class="form-group col-md-6">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" name="date" required>
    </div>    
</div>

<div class="form-row">
    <div class="form-group col-md-4">
      <label for="class">Class</label>
      <select type="select" name="class" class="form-control" required>
      <option>Select class</option><option>1st</option> <option>2nd</option> <option>3rd</option> <option>4th</option> <option>5th</option> <option>6th</option> <option>7th</option> <option>8th</option> <option>9th</option> <option>10th</option> <option>11th</option> <option>12th</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="division">Division</label>
      <select type="select" name="division" class="form-control" required>
      <option>N/A</option> <option>Arts</option> <option>Science</option> <option>Commerce</option> 
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <select type="select" name="gender" class="form-control" required>
      <option>Male</option> <option>Female</option> <option>Other</option>
      </select>
    </div>
</div>



  <div class="d-inline-block"> 
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="cancel" class="btn btn-danger"><a class="text-light" style="text-decoration:none;" href="home.php">Cancel</a></button>
  </div>
</form>
</div>



<div class="rightdiv">
    <img id="imag" src="imag/mdm21.jpg" alt="logo">
</div>
</div>

 <!-- Copyright -->
 <div id="ft" style="border-top: 1px solid black;" class="text-center py-3">
  <p class="text-center">©Copyright 2021-22<strong> <a style="text-decoration: none;" href="home.php">Martine International School.</a></strong> All Rights Reserved<br>
Designed by <strong><a style="text-decoration: none;" href="d8picture.php">D8picture.Pvt.Ltd.</a></strong></p>

  </div>
  <!-- Copyright -->

</body>
</html>