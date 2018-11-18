<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
<body>
 <table class="table" width="60%" border="4" align="center" cellspacing="2" cellpadding="2">
 	<tr>
 		<td>name</td>
 		<td>email</td>
 		<td>password</td>
 		<td>address</td>
 		<td>gender</td>
 		<td>dob</td>
 		<td>age</td>
 		<td>blood</td>
 	</tr>
<?php
 include 'dbconnection.php';
 $qry = mysqli_query($connection,"SELECT * FROM doctor");

 while ($row=mysqli_fetch_array($qry)) {
 	echo "<tr><td>";
 	print_r($row['name']);
 	echo "</td>";
 	echo "<td>";
 	print_r($row['email']);
 	echo "</td>";
 	echo "<td>";
 	print_r($row['password']);
 	echo "</td>";
    echo "<td>";
 	print_r($row['address']);
 	echo "</td>";
 	echo "<td>";
 	print_r($row['gender']);
 	echo "</td>";
 	echo "<td>";
 	print_r($row['dob']);
 	echo "</td>";
 	 	echo "<td>";
 	print_r($row['age']);
 	echo "</td>";
 	 	echo "<td>";
 	print_r($row['blood']);
 	echo "</td>";
 	echo"<td rowspan='2'>";
 	echo "<a href=''>edit</a><br>";
 	echo "<a href=''>delete</a>";
 	echo"</td>"; 

 }

?>
</body>
</html>