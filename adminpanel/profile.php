<?php
include 'admin.php';
?>


<!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->


<div id="addbtn">
  <button style="background-color: orange;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
</div>

<div class="disip">

<form class="p-3" action="#" method="Post">
                               
<div class="form-row">
                        <div class="form-group col-lg-4">
                                <label for="inputEmail1" class="control-label">School Name*</label>
                                <input type="text" name="institute_name" class="form-control"  id="inputEmail1" placeholder="Institution Name"   value="Martine International School"      disabled         required maxlength="60" minlength="5"  >
                        </div>
        							
                        <div class="form-group col-lg-4">
                                <label for="Email" class="control-label"> Email*</label>
                                <input type="email" name="email" class="form-control"    id="Email" maxlength="33" minlength="10" placeholder="Institution Email" value="martineschool@gmail.com" >
                        </div>

                        <div class="form-group col-lg-4">
                                <label for="Website" class="control-label"> Website</label>
                                <input type="text" name="website"  class="form-control"  id="Website" placeholder="Institute website name" maxlength="33" minlength="8" value="martineinterationalschool.com" >
                        </div>
</div>

<div class="form-row">

                        <div class="form-group col-lg-4">
                                <label for="Mobile" class="control-label"> Mobile No*</label>
                                <input type="text" required name="mobile" class="form-control" required maxlength="10" minlength="10"  value="9876543210"    id="Mobile" placeholder="Enter Mobile No">
                        </div>

                        <div class="form-group col-lg-4">
                                <label for="Contact" class="control-label"> Other Contact No(if any)</label>
                                <input type="text" name="phone" class="form-control"  id="Contact" placeholder="Phone No" value="9876556789" maxlength="12" >
                        </div>
                          
                           
                        <div class="form-group col-lg-4">
                                <label for="Address" class="control-label">School Address</label>
                                <input type="text" name="address" class="form-control"  id="Address" placeholder="Institution Address" value="New Bus Stand,Narwana"
                                       maxlength="100" minlength="10">
                        </div>

</div>
                                

<div class="form-row">            
                        <div class="form-group col-lg-4">
                                <label for="Country" class="control-label">Enter Country Name*</label>      
                                <input type="text" maxlength="33" id="Country"   name="Country" class="form-control" value="India" disabled      >   
                        </div>   
								
                        <div class="form-group col-lg-4">
                                <label for="state" class="control-label">Enter State Name*</label>
                                <input type="text" maxlength="33" id="state"   name="state" class="form-control"   value="Haryana"    >
				        </div>
                              
                        <div class="form-group col-lg-4">
                                <label for="City" class="control-label">City</label>
                                <input type="text" class="form-control" name="city" id="City" value="Narwana"  maxlength="55" >
                        </div>    

</div>


<div class="form-row">
                        <div class="form-group col-lg-4">
                                <label for="Pin" class="control-label">Pin Code</label>
                                <input type="text"  name="pincode" id="Pin"  value="126116" class="form-control"  maxlength="6"  >
                        </div> 

                        <div class="form-group col-lg-4">
                                <label for="Board" class="control-label">Board Name</label>
                                <input type="text" name="approvedfrom" id="Board" value="CBSE" disabled  class="form-control" maxlength="22" >
                        </div>
                          
                        <div class="form-group col-lg-4">
                                <label for="Code" class="control-label">School Code</label>
                                <input type="text"  name="schoolCode" class="form-control" id="Code"  value="112233" maxlength="22"   >
                        </div>

</div>

<div class="form-row">						 
                        
                           
<div class="form-row">
                            
                        <div class="form-group col-lg-6">
                                <label for="inputPassword1" class="control-label">Logo(if any)</label>
                                <input type="file" name="fileToUpload"   id="inputPassword1" >
                        </div>

                       
                         
</div>
<div class="form-row">
<div class="form-group col-lg-4">
                                <label for="inputPassword1" class="control-label"></label>
                                <button type="submit"   name="save_profile" class="btn btn-primary">Submit</button>
                        </div>
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