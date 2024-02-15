<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "root");
$stmt = $conn->prepare("UPDATE tb_users SET deslogin = :USER, despassword = :PASSWORD WHERE iduser = :ID");

$user = "Master";
$password = "qwe%w/5sd";
$id = 2;

$stmt->bindParam(":USER", $user);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Data updated";

?>