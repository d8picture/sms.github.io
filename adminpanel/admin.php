<?php
session_start();

if(!isset($_SESSION["username"])){
  header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../adminpanel/styles.css">  
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../adminpanel/busts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>
<body>
    

    <div id="wrapper">
        <div class="header">
          <h2 class="mt-3 text-uppercase">MARTINE INTERNATONAL SCHOOL</h2> 
        </div>
        
    </div>   
                
       
<div class="sidenav">
<h1>ADMIN MIS</h1>

<!--<div><h2 style="color:white; text-align:center; margin-top:5px;">ADMIN</h2></div>-->
 <div class="sid">

 

 <a style=" text-decoration: none;" href="dashboard.php"><i class="fa-solid fa-house"></i><span>&nbsp;&nbsp;&nbsp;Dashboard</a></span>
 
    <button id="drop" class="dropdown-btn"><i class="fa-solid fa-gear"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Setting<i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="profile.php">Profile</a>
      </div>


    <button id="drop" class="dropdown-btn"><i class="fa-solid fa-user"></i><span>&nbsp;&nbsp;&nbsp; Student <i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style="text-decoration: none;" href="adstudents.php">Registration</a>
          <a style=" text-decoration: none;" href="displaystudent.php">Add/View</a>
          <a style=" text-decoration: none;" href="attendance.php">Attendance</a>
          <a style=" text-decoration: none;" href="idcard.php">ID Card</a>
          <a style=" text-decoration: none;" href="certificates.php">Certificates</a>
      </div>
 
  <button id="drop" class="dropdown-btn"><i class="fa-solid fa-money-bill"></i><span>&nbsp;&nbsp;&nbsp;Accounts<i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="studentfee.php">Student Fee</a>
          <a style=" text-decoration: none;" href="salary.php">Salary</a>
      </div>

  <button id="drop" class="dropdown-btn"><i class="fa-solid fa-book"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Homework/Study <i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="homework.php">Send Homework<br>(App)</a>
          <a style=" text-decoration: none;" href="studymeterial.php">Study Meterial<br>(Via sms)</a>
          <a style=" text-decoration: none;" href="youtubevideo.php">Video Gallery</a>
          <a style=" text-decoration: none;" href="#">School Video</a>
          
      </div>

    <button id="drop" class="dropdown-btn"><i class="fa-solid fa-check"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Exam Managment <i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="admitcard.php">Admit Card<br>or Datesheet</a>
          <a style=" text-decoration: none;" href="mcqtest.php">MCQ Test</a>
          <a style=" text-decoration: none;" href="generaltest.php">General Test</a>
          <a style=" text-decoration: none;" href="addexam.php">Add Exam</a>
          <a style=" text-decoration: none;" href="questionpaper.php">Question paper</a>
      </div>


    <button id="drop" class="dropdown-btn"><i class="fa-solid fa-laptop"></i><span>&nbsp;&nbsp;&nbsp;Live class <i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="#">Create Live Class</a>
          <a style=" text-decoration: none;" href="#">View Live Class</a>
      </div>

    <button id="drop" class="dropdown-btn"><i class="fa-solid fa-user"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Employees<i class="fa-solid fa-caret-down"></i></span></button>
      <div class="dropdown-container">
          <a style=" text-decoration: none;" href="#">Attendance</a>
          <a style=" text-decoration: none;" href="teacher.php">Add/View</a>
      </div>

    
 <a id="logbtn" style=" text-decoration: none;" href="../logout.php"><i class="fa-solid fa-user-xmark"></i><span>&nbsp;&nbsp;&nbsp;Log-out</a></span>
 
 </div>
  
 </div>
 

 



<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>





<div class="main">
 

   






