<?php
require_once('logics/dbconnection.php');
//counting total no of students
$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);


$queryEnrolledFemale =  mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='Female'");
$countAllFemale = mysqli_num_rows($queryEnrolledFemale);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('includes/header.php')?>

</head>
<body>
    <!-- All our code.Write here -->
    <!-- header start -->
   
    <?php require_once('includes/navbar.php')?>

    <!-- header end -->

    <!-- sidebar -->
    <?php require_once('includes/sidebar.php')?>
    <!-- sidebar -->
    
    <div class="main-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-header bg-dark text-white text-center">
                <span>Top content</span>
              </div>
              <div class="card-body"></div>
              <div class="card-footer"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card-header bg-dark text-white text-center">
                <span>Students</span>
              </div>
              <div class="card-body">
                <div class="card-body">
                <span><i class="fa fa-group fa-3x"></i></span>
                <span class="float-end badge bg-primary"><?php echo $countAllStudents ?></span>
                </div>
              </div>
              <div class="card-footer"></div>
              </div>
              <div class="col-lg-3">
                <div class="card-header bg-dark text-white text-center">
                  <span>Available Courses</span>
                </div>
                <div class="card-body">
                <span><i class="fa fa-group fa-3x"></i></span>
                <span class="float-end badge bg-primary"><?php echo $countAllFemale ?></span>
                  
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
              <div class="card-header bg-dark text-white text-center">
                <span>Campuses</span>
              </div>
              <div class="card-body">
                <span><i class="fa fa-group fa-3x"></i></span>
                <span class="float-end">00</span>
              </div>
              <div class="card-footer"></div>
          </div>
          <div class="col-lg-3">
            <div class="card-header bg-dark text-white text-center">
              <span>Users</span>
            </div>
            <div class="card-body">
              <span><i class="fa fa-group fa-3x"></i></span>
              <span class="float-end">00</span>
            </div>
            <div class="card-footer"></div>
        </div>
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center">
            <span>Student Analysis</span>
          </div>
        </div>

    </div>














   	<!-- All our code. write here   -->

</body>
</html>