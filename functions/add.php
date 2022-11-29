<?php
require_once "../db.php";
$conn = new Database("user");

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$password=$_POST['password'];

$conn->insert([
	'name'=>$_POST['name'],
	'age'=>$_POST['age'],
	'email'=>$_POST['email'],
	'password'=>$_POST['password']
]);

header('location:../table.php');