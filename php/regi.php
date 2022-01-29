<?php
include "dbcon.php";

$email = $_POST['email'];
$pass = $_POST['pass'];


$name = "name";

$sql = "INSERT INTO admindata (email, password)
VALUES ('$email', '$pass')";
if ($conn->query($sql) === TRUE) {

    mkdir("filedata/" . $_COOKIE['email']);
    $textfile = fopen("filedata/".$_COOKIE['email']."/log.txt", "w");    
    setcookie('email', $email, 0, "/");
    include 'encrypted.php';
    $encryption = encryption($pass);
    setcookie('password', $encryption, 0, "/");
    header("Location: ../");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
