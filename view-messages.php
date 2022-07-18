<?php
require_once('connection.php');
//1.database connection
$sqlFetchContactStudent= mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($sqlFetchContactStudent))
{
    $id = $fetchStudent['no'];
    $fullname = $fetchStudent['fullname'];
    $email = $fetchStudent['email'];
    $phonenumber = $fetchStudent['phonenumber'];
    $gender = $fetchStudent['gender'];
    $course = $fetchStudent['course'];
    $created_at = $fetchStudent['created_at'];
    
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once('includes/header.php')?>

            <body>
                <?php require_once('includes/navbar.php')?>
                    <?php require_once('includes/sidebar.php')?>
                         <div class="main-content pt-5">
                             <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header bg-dark text-white text-center">
                                            <div class="card-title"><h4>Personal information</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-group">
                                                <li class="list-group-item">Full Name: <span class="float-end badge bg-danger"><?php echo $fullname?></span></li>
                                                <li class="list-group-item">Email: <span class="float-end badge bg-warning"><?php echo $email?></span></li>
                                                <li class="list-group-item">Phone Number: <span class="float-end badge bg-success"><?php echo $phonenumber?></span></li>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <br>
                                           <div class="card">
                                                    <div class="card-header bg-dark text-white text-center">
                                                        <div class="card-title"><h4>Other information</h4></div>
                                                    </div>
                                            </div>
                                            <div class="card-body mb-4">
                                                <div class="list-group">
                                                    <li class="list-group-item">Gender: <span class="float-end badge bg-danger"> <?php echo $gender?></span></li>
                                                    <li class="list-group-item">Course: <span class="float-end badge bg-warning"><?php echo $course?></span></li>
                                                    <li class="list-group-item">Enrolled on: <span class="float-end badge bg-success"><?php echo $phonenumber?></span></li>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>

                             </div>
                         </div>
   
                    <?php require_once('includes/scripts.php')?>
            </body>

    </head>
</html>