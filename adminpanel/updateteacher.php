<?php
include 'admin.php';
?><?php
include 'allconn.php';

$id=$_GET['updateid'];

$sql="Select * from teacher where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$uname=$row['Name'];
$ufname=$row['Fname'];
$umobile=$row['Mobile'];
$ugender=$row['Gender'];
$uage=$row['Age'];
$usubject=$row['Subject'];
$uaddress=$row['Address'];



if(isset($_POST['update'])){
    $cename=$_POST['ename'];
    $cfname=$_POST['fname'];
    $cmobile=$_POST['mobile'];
    $cgender=$_POST['gender'];
    $cage=$_POST['age'];
    $csubject=$_POST['subject'];
    $caddress=$_POST['address'];
  

    $sql="update teacher set id=$id,Name='$cename',Fname='$cfname',Mobile='$cmobile',Gender='$cgender',Age='$cage',Subject='$csubject',Address='$caddress'
    where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script>
            alert('update TEACHERS DATA success');
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

?>



<!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->


<div id="addbtn">
  <button type="submit" name="viewemp" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="displayteacher.php">View Employee</a></button>
  <button style="background-color: orange;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
</div>

<div id="ticher" class="disp">

<form id="addstu" action="" method="post">
<h3 class="mb-5 text-uppercase text-center">Update Employees Informations</h3>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="ename">Employee name</label>
      <input type="text" class="form-control" name="ename" value="<?php echo $uname; ?>"  placeholder="Enter Employee name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname" value="<?php echo $ufname; ?>" placeholder="Enter Employee's father name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" value="<?php echo $umobile; ?>" placeholder="Enter Employee's mobile number" required>
    </div>
  </div>

  

  <div class="form-row mt-2">
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <select type="select" name="gender" value="<?php echo $ugender; ?>" class="form-control" required>
      <option>Male</option> <option>Female</option> <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="age">Age</label>
      <select type="select" name="age" value="<?php echo $uage; ?>" class="form-control" required>
      <option>21</option> <option>22</option> <option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="subject">Subject</label>
      <select type="select" name="subject" value="<?php echo $usubject; ?>" class="form-control" required>
      <option>ENGLISH</option> <option>HINDI</option> <option>MATH</option> <option>SCIENCE</option><option>SOCIAL SCIENCE</option><option>POLITICAL</option><option>HISTORY</option><option>GEOGRAPHY</option>
      </select>
    </div>
  </div>
  

  <div class="form-row mt-2">
   
    <div class="form-group col-md-6">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" name="address" value="<?php echo $uaddress; ?>" placeholder="Apartment, studio, or floor" required>
    </div>  
  </div>



  <div class="d-inline-block"> 
    <button type="submit" name="update" class="btn btn-primary">Update</button>
    <button type="submit" name="cancel" class="btn btn-danger"><a style="text-decoration:none;" class="text-light" href="displayteacher.php">Cancel</a></button>
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