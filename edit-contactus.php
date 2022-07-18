<?php
$message= "";
require_once('logics/dbconnection.php');

$sqlfetch= mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($sqlfetch))
{
    $id = $fetchStudent['no'];
    $firstname = $fetchStudent['firstname'];
    $lastname = $fetchStudent['lastname'];
    $email = $fetchStudent['email'];
    $phonenumber = $fetchStudent['phonenumber'];
    $message = $fetchStudent['message'];
    $created_at = $fetchStudent['created_at'];
} 
//updating records
require_once('logics/processUpdate-2.php')

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('includes/header.php')?>
</head>
<body>
<?php require_once('includes/navbar.php')?>
<?php require_once('includes/sidebar.php')?>
<div class="main-content pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-center text-white">
                        <h4>Edit student </h4>
                    
                    </div>
                    <div class="card-body">
                    <form action="edit-contactus.php?id=<?php echo $id?>" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullName" class="form-label">First Name:</label>
                        <input type="text"  name="firstname" value="<?php echo $firstname?>" class="form-control">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phoneNumber" class="form-label">Last Name:</label>
                        <input type="text" name="lastname"value="<?php echo $lastname?>" class="form-control">
                    </div>
                </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" name="email" value="<?php echo $email?>" class="form-control">
                        </div>
                        <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullName" class="form-label">Phone Number:</label>
                        <input type="tel"  name="phonenumber" value="<?php echo $phonenumber?>" class="form-control">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phoneNumber" class="form-label">Message:</label>
                        <input type="text" name="message"value="<?php echo $message?>" class="form-control">
                    </div>
                </div>
                       
                    </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p>In order to complete your regiristration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>You agree by providing informtion you understand all our data privacy and rotection policy outlined in our Terms & condition and the Privacy Policy statements.</p>
                                </div>
                            </div>
                            <div class="col-12 form-check">
                                <label for="invalidCheck" class="form-check-label">
                                     Agree to terms and cnditions
                                </label>
                                <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                            </div>
                            <div class="col-12">


                                <button name='updateEnrollment' class="btn btn-primary">Update application</button>
                            </div>   
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('includes/scripts.php')?>
</body>
</html>