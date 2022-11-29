<?php
require_once "../db.php";

$id=$_GET['id'];
$conn = new Database("user");
$conn->delete($id);

header('location:../table.php');

