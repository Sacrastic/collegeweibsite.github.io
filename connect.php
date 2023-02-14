<?php

$username = $_POST['username'];
$email = $_POST['email'];
$pasword = $_POST['password'];
$passowrd2 = $_POST['password2'];
$number = $_POST['number'];


// database

//  host           usernmae        password        database-name
$conn = new mysqli('fdb31.biz.nf','3932223_test','piyaso@12','3932223_test');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}
 else
 {
    $stmt = $conn->prepare("insert into student(username,email,password,password2,number)
    values(? , ? , ? , ? , ? )");

    $stmt->bind_param("ssssi", $username, $email, $password, $password2, $number);
    $stmt->execute();
    echo "Registration Successful ....";
    $stmt->close();
    $conn->close();
}
?>