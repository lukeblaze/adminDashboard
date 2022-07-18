<?php
//updating user records
if(isset($_POST['updateContactus'])){

    //fetch form data
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $message = $_POST['message'];
      $created_at = $_POST['created_at'];
    
      //perfom the sql qery
      $updateRecords=mysqli_query($conn, "UPDATE contactus set firstname='$firstname',lastname='$lastname',phonenumber='$phonenumber',email='$email',message='$message',created_at='$created_at' WHERE no='".$_GET['id']."'");
    
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