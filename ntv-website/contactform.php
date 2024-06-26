<?php

// echo $_POST['user_name'];
// echo "<br>";
// echo $_POST['phone'];
// echo "<br>";
// echo $_POST['email'];
// echo "<br>";
// echo $_POST['message'];
// echo "<br>";

// echo "email is " . $_POST['email'] . " and message is " . $_POST['message'];

// echo "<br>";

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "ntv_db"; // change to own database name

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$connection) {
    die("Connection Failed. Try again later. <br>");
} else{
    echo "Connection Successful. <br>";
}

// capture data/ variables. change to your own
$name = $_POST['user_name']; 
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO `contacts_table`(
`name`, `phone`,
 `email`, `message`
) VALUES (
'".$name."','".$phone."',
'". $email ."','".$message."'
)";

// echo $sql;
// echo "<br>";

// $connection->query($sql);

if ($connection->query($sql)) {
    echo "data has been saved. Thnak you. <br>";

    // redirecting to another page eg. comments page

    header("location: comments.php");

} else {
    echo "Error: Failed to save data. <br>";
}

?>