<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");

if($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES(?, ?)");
$stmt->bind_param("ss", $user, $password);

$user = "user";
$password = "1234";
$stmt->execute();

$user = "root";
$password = "asd!4%";
$stmt->execute();

?>