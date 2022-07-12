<?php
//updating user records
if(isset($_POST['updateEnrollment'])){

    //fetch form data
      $fullname = $_POST['fullname'];
      $phonenumber = $_POST['phonenumber'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $course = $_POST['course'];
    
      //perfom the sql qery
      $updateRecords=mysqli_query($conn, "UPDATE enrollment set fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course' WHERE no='".$_GET['id']."'");
    
      if($updateRecords)
      {
        $message = "Records updated successfully";
      }
      else
      {
        $message = "Error occured while updating records";
      }
    
    }
?>