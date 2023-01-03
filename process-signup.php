<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passworld = $_POST['passworld$passworld'];
    $password_confirmation = $_POST['$password_confirmaion'];
//Database connection
$conn = new mysqli('localhosst', 'root', '', 'test');
if($conn->connect_error){
    die('connection Failed  : ' $conn -> connect_error);
}else{
    $stmt = $mysqli->stmt_int();
}

?>