<!DOCTYPE html>
<html>
<head>
	<title>add department</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <form action="" method="post">
  	Department name : <input type="text" name="department"> <br>
  	Department description : <textarea name="description"></textarea>
  	 <input type="submit" name="submit" value=" submit">
  </form>
</body>
</html>
<?php
 include 'dbconnection.php';
 if (isset($_POST['submit'])) {
 	$department =$_POST['department'];
 	$description=$_POST['description'];
    
    $res = mysqli_query($connection,"INSERT INTO department(id,department,description) VALUES ('','$department','$description')");
    if (!$res) {
        echo "INVALID QUERY";
    }


 }
?>