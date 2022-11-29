<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	require_once "../db.php";
	$conn= new Database('user');
	$id = $_GET['id'];
	$select = "SELECT * FROM user WHERE id = $id";
	 $result=$conn->read('id',$id);
	  $result =$result->fetch_assoc();

	?>
	<form method="post" action="../functions/update.php">
		<label>name</label>
		<input type="text" name="name" class="form-control" value="<?=$result['name']?>">
		<label>age</label>
		<input type="text" name="age" class="form-control" value="<?=$result['age']?>">

		<label>email</label>
		<input type="text" name="email" class="form-control" value="<?=$result['email']?>">
		<label>password</label>
		<input type="text" name="password" class="form-control" value="<?=$result['password']?>">
		<input type="hidden" name="id" value="<?=$result['id']?>">
		<input type="submit" class="btn btn-primary" value="edit">



		
	</form>

</body>
</html>