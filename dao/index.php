<?php

require_once("config.php");

// CONNECTION and GET ALL USERS
/* $sql = new Sql();
$users = $sql->select("SELECT * FROM tb_users");
echo json_encode($users); */

// GET USER by ID
/* $user = new User();
$user->loadById(5);
echo $user; */

// GET ALL USERS
/* $list = User::getList();
echo json_encode($list); */

// GET USERS by LOGIN SEARCH
/* $search = User::search('o');
echo json_encode($search); */

// GET USER by LOGIN and PASSWORD
/* $user = new User();
$user->login("user", "1234");
echo $user; 
$user->login("user12", "1234");
echo $user; */

// INSERT USER
/* $student = new User("student", "@lun0");
$student->insert();
echo $student; */

// UPDATE USER
/* $user = new User();
$user->loadById(7);
$user->update("teacher", "!#asda42&%");
echo $user; */

// DELETE USER
$user = new User();
$user->loadById(3);
$user->delete();
echo $user;

?>