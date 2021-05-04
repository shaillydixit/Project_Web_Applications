<?php
$server="localhost";
$username="root";
$password=""; 

$conn = mysqli_connect($server, $username, $password);



mysqli_select_db($conn, 'Project1');

$Myname = $_POST['Name'];
$Myemail = $_POST['Email'];
$Mymessage = $_POST['Message'];


    $query = "INSERT INTO `project` ( `Name`, `Email`, `Message`, `Datetime`) 
    VALUES ('$Myname', '$Myemail', '$Mymessage', current_timestamp())";

   mysqli_query($conn, $query);
$conn->close();
header('location:index.html');



?>