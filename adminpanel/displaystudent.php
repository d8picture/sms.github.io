<?php
include 'admin.php';
?>
<?php
include 'allconn.php';
?>



<div id="addbtn">
  <button type="submit" name="addstudent" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="adstudents.php">Add Student</a></button>
  <button style="background-color: red;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
  <input type="button" class="btn" value="Print Table" onclick="stutable.printTable()" />
</div>

<div class="disp"  > <!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->
<table id="tab" class="table">
  <thead  class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">FNAME</th>
      <th scope="col">MNAME</th>
      <th scope="col">MOBILE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CLASS</th>
      <th scope="col">DIVISION </th>
      <th scope="col">GENDER </th>
      <th scope="col" >DOB </th>
      <th scope="col">status </th>
      <th scope="col">OPERATONS </th>
    </tr>
  </thead>
<tbody>

  <!-- start sql command for print data on table -->
<?php
$sql = "Select * from crud";
$result = mysqli_query($conn,$sql);
if($result){
 while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $cname=$row['Name'];
    $cfname=$row['Fname'];
    $cmname=$row['Mname'];
    $cmobile=$row['Mobile'];
    $caddress=$row['Address'];
    $cclass=$row['Class'];
    $cdivision=$row['Division'];
    $cgender=$row['Gender'];
    $cdob=$row['Dob'];
    $cstatus=$row['status'];
  echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$cname.'</td>
  <td>'.$cfname.'</td>
  <td>'.$cmname.'</td>
  <td>'.$cmobile.'</td>
  <td>'.$caddress.'</td>
  <td>'.$cclass.'</td>
  <td>'.$cdivision.'</td>
  <td>'.$cgender.'</td>
  <td>'.$cdob.'</td>
  <td>'.$cstatus.'</td>
  <td style="display:flex;">
  <button style="" class="btn btn-primary"><a class="text-light"  style="text-decoration:none"; href="updatestudent.php?updateid='.$id.'">Update</a></button>
  <button style="margin-left:3px;" class="btn btn-danger"><a class="text-light" style="text-decoration:none"; href="deletestudent.php?deleteid='.$id.'">Delete</a></button>
  </td>
      </tr>';

 }
   
}

  ?>

        

  </tbody>
</table>

</div><!-- END MAIN PAGE -->




</div><!-- closing div of mai section which is set in admin page -->


 <!-- footer start  -->
<div class="mainn">
  <footer> 
    <p>©Copyright 2021-22. All Rights Reserve</p>
</footer>
  <div>
<!-- footer end  -->


</body>
<script>
  var stutable = new function () {
        this.printTable = function () {
            var tab = document.getElementById('tab');
            var win = window.open();
            win.document.write(tab.outerHTML);
            win.print();
        }
    }
</script>
</html>

