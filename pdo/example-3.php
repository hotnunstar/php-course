<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "root");
$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES(:USER, :PASSWORD)");

$user = "John";
$password = "Doe123";

$stmt->bindParam(":USER", $user);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Data inserted";

?>