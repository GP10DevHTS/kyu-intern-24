<style>
        nav ul{
            list-style: none;
        }
        nav ul li{
            display: inline;
        }
    </style>
<nav>
        <ul>
            <li>
                <a href="./index.html">Home</a>
            </li>
            <li>
                <a href="./about-us.html">about us</a>
            </li>
            <li>
                <a href="./morepages/contactus.html">contactus</a>
            </li>
            <li>
                <a href="./comments.php">Comments</a>
            </li>
        </ul>
    </nav>

<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "ntv_db";

$connection = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$connection) {
    die("Connection Failed. Try again later. <br>");
} else{
    // echo "Connection Successful. <br>";

    $sql = "Select * from contacts_table";

    if ($data = $connection->query($sql)) {
        while ($row = $data->fetch_assoc()) {
            // echo $row['id'] ;
            // echo "<br>";
            echo "<div class='message_box'>"    ;        
            echo $row['name'] ;
            echo "<br>";
            echo $row['phone'] ;
            echo "<br>";
            echo $row['email'] ;
            echo "<br>";
            echo $row['message'] ;
            echo "<br>";
            echo "</div>";
        }
    }
    else{
        echo "no records. please be the first to comment";
    }
}
?>

<style>
    .message_box{
        border: 1px solid red;
        display: inline-block;
        background-color: greenyellow;
        padding: 10px;
        box-shadow: 10px 10px black;
        margin: 20px;
    }
</style>
