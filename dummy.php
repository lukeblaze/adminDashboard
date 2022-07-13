<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$conn=mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM enrollment");
while($fetchRecords = mysqli_fetch_array($sql)) {

    echo $fetchRecords['fullname'].$fetchRecords['phonenumber'].$fetchRecords['email'].$fetchRecords['course'].$fetchRecords['gender'].'<br>';
};

?>

<th scope="row">1</th>
                            <td>Matilda</td>
                            <td>Moyen</td>
                            <td>@pop</td>
                            <td>@kish</td>
                            <td>@korr</td>
                            <td>----</td>







                            <?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$conn=mysqli_connect($server,$username,$password,$database);

$sql = mysqli_query($conn, "SELECT * FROM enrollment");
?>                       






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