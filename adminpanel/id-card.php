<?php
include 'admin.php';
?>


<!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->

<div id="icard" class="disp bg-light">

<form id="idcard" action="" method="">
<h3 style="width: 50%;" class="mb-4 text-uppercase text-left">ID-CARD FORM</h3>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="sname">Student name</label>
      <input type="text" class="form-control" name="sname"  placeholder="Enter student name" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter father name" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="rollno">Roll No.</label>
      <input type="text" class="form-control" name="rollno" placeholder="Enter roll number" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-2">
      <label for="class">Class</label>
      <select type="select" name="class" class="form-control" required>
      <option>1st</option> <option>2nd</option> <option>3rd</option> <option>4th</option> <option>5th</option> <option>6th</option> <option>7th</option> <option>8th</option> <option>9th</option> <option class="btn-primary" selected>10th</option> <option>11th</option> <option>12th</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" name="date" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" placeholder="Enter mobile number" required>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
      <label for="file" class="upload">Upload image</label>
      <input type="file" class="form-control" name="file" accept="image/*" onchange="loadImage(event)" required>
    </div>
</div>

</form>
<button type="submit" name="preview" class="btn btn-primary">Preview</button>
  
  <div class="container">
      <div class="card" id="result">
          <header id="head">
              <div class="camp">
                  <h4>campus card</h4>
                  <span>undergraduate</span>

              </div>
                    <img src="../imag/mis.png" id="logos" alt="">
          </header>
          <div class="content">
              <img src="" alt="">
              <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
              </ul>
             
          </div>
          

      </div>
     
  </div> <button id="dawn" class="btn">Download</button>



  



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