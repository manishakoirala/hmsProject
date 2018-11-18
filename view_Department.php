<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
<body>
 <table class="table" width="60%" border="4" align="center" cellspacing="2" cellpadding="2">
 	<tr>
 		<td>Department</td>
 		<td>Description</td>
 		
 	</tr>
<?php
 include 'dbconnection.php';
 $qry = mysqli_query($connection,"SELECT * FROM department");

 while ($row=mysqli_fetch_array($qry)) {
 	echo "<tr><td>";
 	print_r($row['department']);
 	echo "</td>";
 	echo "<td>";
 	print_r($row['description']);
 	echo "</td>";
 	echo"<td rowspan='2'>";
 	echo "<a href=''>edit</a><br>";
 	echo "<a href=''>delete</a>";
 	echo"</td>"; 
 	

 }

?>
</body>
</html>