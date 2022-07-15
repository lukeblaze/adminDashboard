<?php
$msg='';
require_once('processRegister.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span></span>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
            <img src="zalego.jpg" alt="profile">
        </div>
    <div class="card-body">
    <form action="register.php?id=<?php echo $id?>" method="POST" class="form-group" autocomplete="of">
  <div class="justify-content-center align-items-center">
    <div class="row">
        <div class="header align-center">
           <img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
           <span><?php echo $msg ?></span>
        </div>


        <div class="col-lg-12">
            <div class="form-group">
               <label  class="form-group">Username</label>
               <input type="text"  name="userName" class="form-control">
           </div>
        </div>

            <div class="col-lg-12">
                <div class="form-group">
                        <label  class="form-group">Email</label>
                        <input type="email" name="email" class="form-control">
                </div>
            </div>


        <div class="col-lg-12">
            <div class="form-group">
                        <label  class="form-group">Password</label>
                        <input type="password" name="password" class="form-control">
             </div>
         </div>

        <div class="col-lg-12">
            <div class="form-group">
                        <label  class="form-group"> Confirm Password</label>
                        <input type="password" name="password" class="form-control">
            </div>
        </div>
    </div>
  </div>
  <div class="form-group">
    <input type="submit" name="signUp" class="btn btn-primary btn-sm">
  </div>
</form>


<br>
                <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>

                <div>
                    <p>Have an account? Sign in Here</p>
                </div>


    </div>
</body>
<form action="register.php?id=<?php echo $id?>" method="POST" class="form-group" autocomplete="of">
  <div class="justify-content-center align-items-center">
    <div class="row">
        <div class="header align-center">
           <img src="zalego.jpg" alt="zalego" height="50" width="50" class="rounded-circle">
           <span><?php echo $msg ?></span>
        </div>


        <div class="col-lg-12">
            <div class="form-group">
               <label  class="form-group">Username</label>
               <input type="text"  name="userName" class="form-control">
           </div>
        </div>

            <div class="col-lg-12">
                <div class="form-group">
                        <label  class="form-group">Email</label>
                        <input type="email" name="email" class="form-control">
                </div>
            </div>


        <div class="col-lg-12">
            <div class="form-group">
                        <label  class="form-group">Password</label>
                        <input type="password" name="password" class="form-control">
             </div>
         </div>

        <div class="col-lg-12">
            <div class="form-group">
                        <label  class="form-group"> Confirm Password</label>
                        <input type="password" name="password" class="form-control">
            </div>
        </div>
    </div>
  </div>
  <div class="form-group">
    <input type="submit" name="signUp" class="btn btn-primary btn-sm">
  </div>
</form>


<br>
                <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>

                <div>
                    <p>Have an account? Sign in Here</p>
                </div>

