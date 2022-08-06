<?php
include 'admin.php';
?>


<!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->


<div id="addbtn">
  <button type="submit" name="viewemp" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="displayteacher.php">View Employee</a></button>
  <button style="background-color: orange;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
</div>

<div id="ticher" class="disp">

<form id="addstu" action="teachermysql.php" method="post">
<h3 class="mb-5 text-uppercase text-center">Employees Panel</h3>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="ename">Employee name</label>
      <input type="text" class="form-control" name="ename"  placeholder="Enter Employee name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="fname">Father name</label>
      <input type="text" class="form-control" name="fname" placeholder="Enter Employee's father name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" name="mobile" placeholder="Enter Employee's mobile number" required>
    </div>
  </div>

  

  <div class="form-row mt-2">
    <div class="form-group col-md-4">
      <label for="gender">Gender</label>
      <select type="select" name="gender" class="form-control" required>
      <option>Male</option> <option>Female</option> <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="age">Age</label>
      <select type="select" name="age" class="form-control" required>
      <option>21</option> <option>22</option> <option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="subject">Subject</label>
      <select type="select" name="subject" class="form-control" required>
      <option>ENGLISH</option> <option>HINDI</option> <option>MATH</option> <option>SCIENCE</option><option>SOCIAL SCIENCE</option><option>POLITICAL</option><option>HISTORY</option><option>GEOGRAPHY</option>
      </select>
    </div>
  </div>
  

  <div class="form-row mt-2">
   
    <div class="form-group col-md-6">
      <label for="address">Address</label>
      <input type="textarea" class="form-control" name="address" placeholder="Apartment, studio, or floor" required>
    </div>  
  </div>



  <div class="d-inline-block mt-3"> 
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
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