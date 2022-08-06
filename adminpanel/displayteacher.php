<?php
include 'admin.php';
?>
<?php
include 'allconn.php';
?>

<div id="addbtn">
  <button type="submit" name="teacher" class="btn btn-primary"><a class="text-light" style="text-decoration:none;" href="teacher.php">Add Employee</a></button>
  <button style="background-color: red;" type="submit" name="dashboard" class="btn"><a class="" style="text-decoration:none; color:white;" href="dashboard.php">Dashboard</a></button>
  <input type="button" class="btn" value="Print Table" onclick="stutable.printTable()" />
</div>

<div class="disp"  > <!-- MAIN PAGE CONTENT AND COMMON ALL PAGES -->

<table id="tab" class="table table-hover text-left">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">FNAME</th>
      <th scope="col">MOBILE</th>
      <th scope="col">GENDER</th>
      <th scope="col">AGE</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">OPERATONS</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
$sql = "Select * from teacher";
$result = mysqli_query($conn,$sql);
if($result){
 while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $cname=$row['Name'];
    $cfname=$row['Fname'];
    $cmobile=$row['Mobile'];
    $cgender=$row['Gender'];
    $cage=$row['Age'];
    $csubject=$row['Subject'];
    $caddress=$row['Address'];
   
  echo '<tr>
  <th scope="row">'.$id.'</th>
  <td>'.$cname.'</td>
  <td>'.$cfname.'</td>
  <td>'.$cmobile.'</td>
  <td>'.$cgender.'</td>
  <td>'.$cage.'</td>
  <td>'.$csubject.'</td>
  <td>'.$caddress.'</td>
  <td style="display:flex;">
  <button style="" class="btn btn-primary"><a class="text-light"  style="text-decoration:none"; href="updateteacher.php?updateid='.$id.'">Update</a></button>
  <button style="margin-left:3px;" class="btn btn-danger"><a class="text-light" style="text-decoration:none"; href="deleteteacher.php?deleteid='.$id.'">Delete</a></button>
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