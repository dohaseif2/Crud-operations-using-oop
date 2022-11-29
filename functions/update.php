<?php

require_once "../db.php";

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];

$conn=new Database('user');

$conn->update(['name'=>$name,'age'=>$age ,'email'=>$email,'password'=>$password],$id);


header('location:..\table.php');







