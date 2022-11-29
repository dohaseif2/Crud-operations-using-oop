	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<table class="table table-bordered table-striped">

	<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>email</th>
			<th>password</th>
			
	</tr>
	<?php

         require_once "../db.php";
         $id=$_GET['id'];
         $conn = new Database('user');
         $result=$conn->read('id',$id);
         $result =$result->fetch_assoc();

	?>
	<tr>
		<td><?=$result['id']?></td>
		<td><?=$result['name']?></td>
		<td><?=$result['age']?></td>
		<td><?=$result['email']?></td>
		<td><?=$result['password']?></td>
		

	</tr>

</table>
<a href="../table.php" class="btn btn-primary">Show All</a>