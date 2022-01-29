<?php

if ($_COOKIE['email'] == "") {
    header("Location: login.php");
} else {

    include "dbcon.php";
    include 'encrypted.php';


    $email = $_COOKIE['email'];
    $pass = $_COOKIE['password'];

    $decryption = decryption($pass);
    // $decryption = '$Studio0512';

    $select = "*";
    $table = "admindata";

    $sql = "SELECT $select FROM $table WHERE email = '$email' and password = '$decryption' ";
    // $sql = "SELECT * FROM user WHERE email = '". $email ."'";

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {




            // header("Location: ./");
        }
    } else {
        header("Location: login.php");
    }
}
// 