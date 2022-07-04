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