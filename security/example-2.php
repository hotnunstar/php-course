<?php

$id = (isset($_GET["id"]))?$_GET["id"]:4;

if(!is_numeric($id) || strlen($id) > 5){
    exit("Catch!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");
$sql = "SELECT * FROM tb_users WHERE iduser = $id";
$exec = mysqli_query($conn, $sql);

while($result = mysqli_fetch_object($exec)){
    var_dump($result);
}

?>