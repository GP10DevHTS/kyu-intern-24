<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "hts_website_db"; // you databname

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection){
    // failed to connect
    die("Failed to connect");
}

// capture form variables
$name = $_POST["name"];  
$email = $_POST['u_mail'];
$comment = $_POST['comment'];

$std_num = uniqid();

// any sql statement
$sql = "INSERT INTO `comment`(`name`, `email`, `comment`, `std_num`) VALUES ('".$name."','".$email."','".$comment."','".$std_num."')";



if (!$connection->query($sql)){
    // echo "error failed";
    die("error failed");  
}


// did not fail to save

// echo "Saved. ";
// echo "

//     <a href='./index.html'>Go to home</a>

// ";

header("location: ./index.html");

?>
