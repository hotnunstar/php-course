<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "root");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_users WHERE iduser = ?");

$id = 2;

$stmt->execute(array($id));

/* $conn->rollBack(); */
$conn->commit();

echo "Transaction executed";

?>