<?php
$message= "";
require_once('logics/dbconnection.php');

$queryStudent= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']." '");
while($fetchStudent= mysqli_fetch_array($queryStudent))
{
    $id = $fetchStudent['no'];
    $fullname=$fetchStudent['fullname'];
    $phonenumber=$fetchStudent['phonenumber'];
    $email=$fetchStudent['email'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course'];
}
//upfdating records
require_once('logics/processUpdate.php')

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
                        <?php echo $message ?>
                    </div>
                    <div class="card-body">
                    <form action="edit-enrollment.php?id=<?php echo $id?>" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullName" class="form-label">Full Name:</label>
                        <input type="text"  name="fullname" value="<?php echo $fullname?>" class="form-control">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                        <input type="text" name="phonenumber"value="<?php echo $phonenumber?>" class="form-control">
                    </div>
                </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" name="email" value="<?php echo $email?>" class="form-control">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="gender" class="form-label">What's your gender?</label>
                                <select name="gender" class="form-select"  aria-label="Default select example">
                                    <option selected><?php echo $gender?> </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                        </div>
                    </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <p>In order to complete your regiristration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                <label for="course" class="form-label">What's your preferred course?</label>
                                <select  name="course"class="form-select"  aria-label="Default select example">
                                    <option selected><?php echo $course?> </option>
                                    <option value="Cyber security">Cyber security</option>
                                    <option value="Website Development">Website Development</option>
                                </select>
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