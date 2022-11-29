<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>table</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<a href="design/add.php" class="btn btn-primary ">Add new user</a>
	<br><br>
	<table class="table table-bordered table-striped">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>email</th>
			<th>password</th>
			<th>controls</th>
		</tr>

			<?php
			$db = new Database("user");
			$result=$db ->readall();

			foreach($result as $user){
				?>
		        <tr>
				<td><?=$user['id']?></td>
			    <td><?=$user['name']?></td>
			    <td><?=$user['age']?></td>
			    <td><?=$user['email']?></td>
			    <td><?=$user['password']?></td>
			    <td>
			    	<a href="design/view.php?id=<?=$user['id']?>" class="btn btn-success">View</a>
			    	<a href="design/edit.php?id=<?=$user['id']?>" class="btn btn-primary">edit</a>
			    	<a href="functions/delete.php?id=<?=$user['id']?>" class="btn btn-danger">delete</a>
			    </td>
			    </tr>
			<?php
			}

			?>
			
		
	</table>

</body>
</html>