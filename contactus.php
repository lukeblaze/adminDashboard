<?php

require_once('connection.php');
//1.database connection
$sqlFetchContactStudent= mysqli_query($conn, "SELECT * FROM contactus");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    
    <!-- All our code here -->
    <?php require_once('includes/navbar.php')?>
    <?php require_once('includes/sidebar.php')?>
<div class="main-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-stripped table-responsive{-sm|-md|-lg}" style="font-size:12px">
                    <thead>
                        <div class="card-header bg-dark text-white text-center">
                            <span>Contact Us</span>
                        </div>


                        <tr>
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while($fetchContactRecord= mysqli_fetch_array($sqlFetchContactStudent)) { ?>
                        <tr>
                            <td><?php echo $fetchContactRecord['firstname']?></td>
                            <td><?php echo $fetchContactRecord['lastname']?></td>
                            <td><?php echo $fetchContactRecord['email']?></td>
                            <td><?php echo $fetchContactRecord['phonenumber']?></td>
                            <td><?php echo $fetchContactRecord['message']?></td>
                            <td><?php echo $fetchContactRecord['created_at']?></td>

                            <td>
                                <a href="edit-contactus.php?id=<?php echo $fetchContactRecord['no'] ?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="view-contactus.php?id=<?php echo $fetchContactRecord['no'] ?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>

                                    <a href="delete-contactus.php?id=<?php echo $fetchContactRecord['no'] ?>" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>

                                        <!-- <a href="contactus.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-success btn-sm"><i class="fa fa-envelope"></i></a> -->

                                    </td>
                           
                           
                        </tr>
                       <?php }  ?>
                    </tbody>                        
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>