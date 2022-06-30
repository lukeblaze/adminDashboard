<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$c=mysqli_connect($server,$username,$password,$database);

if($conn)
{
    echo 'Database connection success';
}
else
{
    'Error occured'
}
?>