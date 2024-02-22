<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "root");
$stmt = $conn->prepare("DELETE FROM tb_users WHERE iduser = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Data deleted";

?>