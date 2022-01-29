<?php

include "dbcon.php";

$email = $_POST['email'];
$pass = $_POST['pass'];


$select = "*";
$table = "admindata";

$sql = "SELECT $select FROM $table WHERE email = '$email' and password = '$pass' ";
// $sql = "SELECT * FROM user WHERE email = '". $email ."'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        
        setcookie('email', $email, 0 , "/");
        include 'encrypted.php';
        $encryption = encryption($pass);
        setcookie('password', $encryption, 0 , "/");
        //setcookie('username', $c_uname,  time() + (86400 * 30 * 6) , "/");

        header("Location: ../");
        
    }
}else{
    echo "err";
}

?>