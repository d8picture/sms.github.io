<?php
include 'admin.php';
?>


<div id="mai" class="card bg-dark">
 <div class="dissp">

<div id="cardd">

      <div id="carddd" class="card"><!-- total students-->
          <div class="card-body float-left p-2">
              <?php 
                include 'allconn.php';
                $query = "SELECT id FROM crud ORDER BY id";
                $query_run = mysqli_query($conn,$query);
                $row = mysqli_num_rows($query_run);
                echo '<h1 style="font-size: 60px;">'.$row.'<i style="font-size:50px; color:blue;" class="fa-solid fa-users mt-3 float-right"></i></h1>';
              ?>
                <h4>Total Students</h4>
                <a style="text-decoration: none; color:blue" href="displaystudent.php"><i class="fa-solid fa-eye"></i> Click here for more....details</a>
          </div>   
      </div>






      <div id="carddd" class="card"><!-- total teachers-->

          <div  class="card-body float-left p-2">
                <?php 
                include 'allconn.php';
                $query = "SELECT id FROM teacher ORDER BY id";
                $query_run = mysqli_query($conn,$query);
                $row = mysqli_num_rows($query_run);
                echo '<h1 style="font-size: 60px;">'.$row.'<i style="font-size:50px; color:blue;" class="fa-solid fa-users mt-3 float-right"></i></h1>';
                ?>
                <h4>Total Teachers</h4>
                <a style="text-decoration: none; color:blue" href="displayteacher.php"><i class="fa-solid fa-eye"></i> Click here for more....details</a>
          </div>   
      </div>






<!--   1st div  start--><div id="carddd" class="card"><!-- total demo-->
<div  class="card-body float-left p-2">
 <?php 
include 'allconn.php';
$query = "SELECT id FROM signin ORDER BY id";
$query_run = mysqli_query($conn,$query);
$row = mysqli_num_rows($query_run);
echo '<h1 style="font-size: 60px;">'.$row.'<i style="font-size:50px; color:blue;" class="fa-solid fa-users mt-3 float-right"></i></h1>';
?>
<h4>Total Users</h4>
<a style="text-decoration: none; color:blue" href=""><i class="fa-solid fa-eye"></i> Click here for more....details</a>
<!--   2nd div  end--></div>   
<!--   1st div  end--></div>





<!--   1st div  start--><div id="carddd" class="card mb-0"><!-- total demo-->
<div  class="card-body float-left p-2">
 <?php 
include 'allconn.php';
$query = "SELECT id FROM crud ORDER BY id";
$query_run = mysqli_query($conn,$query);
$row = mysqli_num_rows($query_run);
echo '<h1 style="font-size: 60px;">'.$row.'<i style="font-size:50px; color:blue;" class="fa-solid fa-users mt-3 float-right"></i></h1>';
?>
<h4>Total Students</h4>
<a style="text-decoration: none; color:blue" href=""><i class="fa-solid fa-eye"></i> Click here for more....details</a>
<!--   2nd div  end--></div>   
<!--   1st div  end--></div>

</div>  

<div id="scard" class="card mt-3 m-2">
  <div class="card-header">ADMISSION REQUESTS</div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>class </th>
        <th>action</th>
      </tr>
      </thead>

      <?php
        $query= "SELECT * FROM crud WHERE status = 'pending' ORDER BY id ASC";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Class'];?></td>
        <td>
              <form action="" method="POST">
                <input type="hidden" name = "id"  value ="<?php echo $row['id'];?>"/>
                <input type="submit" name = "approve" value = "approve"/>
                <input type="submit" name = "deny" value = "deny"/>
              </form>
        </td>
      </tr>
    </table>
    <?php
        }
        ?>

</div>
<?php
if(isset($_POST["approve"])){
  $id = $_POST["id"];
  $select = "UPDATE crud SET status = 'approved' WHERE id = '$id'";
  $result = mysqli_query($conn,$select);

  echo '<script type = "text/javascript">';
  echo 'alert("user approved")';
}
?>





</div><!-- MAIN PAGE CONTENT  endddd-->
</div>

</div><!-- closing div of mai section which is set in admin page -->

 <!-- footer start  -->
 <div class="mainn">
  <footer> <p>©Copyright 2021-22. All Rights Reserve</p>
</footer>
  <div>
<!-- footer end  -->



</body>
</html>