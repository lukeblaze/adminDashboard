<?php
require_once('connection.php');
//1.database connection
$sqlFetchEnrollmentStudent= mysqli_query($conn, "SELECT * FROM contactus");
while($fetchStudent= mysqli_fetch_array($sqlFetchEnrollmentStudent))
{
    $firstname = $fetchStudent['firstname'];
    $lastname = $fetchStudent['lastname'];
    $email = $fetchStudent['email'];
    $phonenumber = $fetchStudent['phonenumber'];
    $message = $fetchStudent['message'];
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
                                            <div class="card-title"><h4>Contact Us</h4></div>
                                        </div>
                                        <div class="card-body" style="font-size:12px">
                                            <div class="list-group">
                                                <li class="list-group-item">Firstname: <span class="float-end"><?php echo $firstname?></span></li>
                                                <li class="list-group-item">Lastname: <span class="float-end"><?php echo $lastname?></span></li>
                                                <li class="list-group-item">Email: <span class="float-end"><?php echo $email?></span></li>
                                                <li class="list-group-item">Phonenumber: <span class="float-end"><?php echo $phonenumber?></span></li>
                                                <li class="list-group-item">Message: <span class="float-end"><?php echo $message?></span></li>
                                                <li class="list-group-item">Sent at: <span class="float-end"><?php echo $created_at?></span></li>
                                            </div>
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