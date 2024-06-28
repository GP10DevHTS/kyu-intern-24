<?php
session_start();

$server_name = "localhost";
$db_user="root";
$db_password="";
$db_name="hollytechsolnz"; // database name

$connection = mysqli_connect($server_name,$db_user,$db_password,$db_name);

if(!$connection){
    die("failed to connect");
}



$name = $_POST['name'];
$std_num = $_POST['std_num'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm=$_POST['password_confirm'];
$course =  "BIS";
$suitable = "linux";
$suitable_movie = "movie";
$address = $_POST['address'];

if($password != $password_confirm){
    $_SESSION['error'] = "password not match";
    header("Location: ./index.php");
    die("password not match");
}

$sql = "INSERT INTO `registration`( `Name`, `Student'sNumber`, `Email`, `Password`, `Course`, `Movies`, `Linux`, `Location`) VALUES ('".$name."','".$std_num."','".$email."','".$password."','".$course."','".$suitable."','".$suitable_movie."','".$address."')";

if($connection->query($sql)){
    $_SESSION['success'] = "data inserted successfully";
    header("Location: ./index.php");
}
else{
    $_SESSION['error'] = "data not inserted";
    header("Location: ./index.php");
}

?>
