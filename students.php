<?php

require_once('logics/dbconnection.php');
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
    <div class="header text-white">
        <img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">


        <span class="pull-right" style="padding:10px 30px;text-decoration:none">
        <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i></a>
        </span>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <span><i class="fa fa-group"></i></span>
                    
                    <span>Students</span></a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-group"></i></span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-folder-open"></i></span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-graduation-cap"></i></span>
                        <span>Campus</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-stripped table-responsive{-sm|-md|-lg}">
                    <thead>
                        <div class="card-header bg-dark text-white text-centre">
                            <span>Students</span>
                        </div>


                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Full name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Course</th>
                            <th scope="col">gender</th>
                            <th scope="col">enrolled on</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td><?php echo $fetchEnrollmentRecord['no']?></td>
                            <td><?php echo $fetchEnrollmentRecord['fullname']?></td>
                            <td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
                            <td><?php echo $fetchEnrollmentRecord['email']?></td>
                            <td><?php echo $fetchEnrollmentRecord['gender']?></td>
                            <td><?php echo $fetchEnrollmentRecord['course']?></td>
                            <td><?php echo $fetchEnrollmentRecord['created_at']?></td>
                           
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>

                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>

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