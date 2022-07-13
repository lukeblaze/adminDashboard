<?php
//1.database connection
$sqlFetchEnrollmentStudent= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($sqlFetchEnrollmentStudent))
{
    $fulname = $fetchStudent['fullname'];
    $email = $fetchStudent['email'];
    $phonenumber = $fetchStudent['phonenumber'];
    
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
                                        <div class="card-header bg-dark text-white text-centre">
                                            <div class="card-title"><h4>Personal information</h4></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-group">
                                                <li class="list-group-item">Full Name: <span class="float-end badge bg-danger">Luke Blaze</span></li>
                                                <li class="list-group-item">Email: <span class="float-end badge bg-warning">blazemurimi@gmail.com</span></li>
                                                <li class="list-group-item">Phone Number: <span class="float-end badge bg-success">+254727241479</span></li>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header bg-dark text-white text-centre">
                                            <div class="card-title"><h4>Other information</h4></div>
                                        </div>
                                        <div class="card-body mb-4">
                                            <div class="list-group">
                                                <li class="list-group-item">Gender: <span class="float-end badge bg-danger">Male</span></li>
                                                <li class="list-group-item">Course: <span class="float-end badge bg-warning">Web design & development</span></li>
                                                <li class="list-group-item">Enrolled on: <span class="float-end badge bg-success">12th May 2022</span></li>
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