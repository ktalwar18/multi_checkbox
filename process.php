<?php
$url="localhost";
$username = "root";
$password = "root";
$dbname = "multi_check";
$checkbox1 = $_POST['vehicle'];
// print_r($_POST["vehicle"]);
$chk=implode(",",$_POST["vehicle"]);

    
    

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO checkbox(vehicle)VALUES( '$chk' )";

if(mysqli_query($conn,$sql)) {

    echo 'Data added sucessfully';
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>