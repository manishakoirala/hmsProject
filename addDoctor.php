<!DOCTYPE html>
<html>
<head>
	<title>add Doctor</title>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>
</head>
<body>
  <form action="" method="post">
    
  	 Name    <input type="text" name="name"><br> 
  	 Email    <input type="text" name="email"><br>
  	 Password <input type="Password" name="password"><br>
  	 Address  <textarea name="address" rows="" cols=""></textarea><br>
  	 Phone    <input type="text" name="phone"> <br>
  	 gender   <select name="gender">
  	 	       <option value="Male">Male</option>
  	 	       <option value="Female">Female</option>
  	 	       <option value="Transgender">Transgender</option>
  	          </select><br>
  	 Birth date <input type="text" name="birth"><br>
  	 Age        <input type="text" name="age"><br>
  	 Bloodgroup  <select name="blood">
  	 	            <option value="A+">A+</option>
  	 	            <option value="B+">B+</option>
  	 	            <option value="A-">A-</option>
  	 	            <option value="B-">B-</option>
  	 	            <option value="AB+">AB+</option>
  	 	            <option value="AB-">AB-</option>
  	             </select><br>
  	      <input type="submit" name="submit" value="submit">

  </form>
</body>
</html>
<?php
 include 'dbconnection.php';
 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password']; 
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['birth'];
    $age = $_POST['age'];
    $blood=$_POST['blood'];
    
    $res = mysqli_query($connection,"INSERT INTO doctor(id,name,email,password,address,gender,dob,age,blood) VALUES ('','$name','$email','$pass','$address','$gender','$dob','$age','$blood')");
    if (!$res) {
        echo "INVALID QUERY";
    }


 }
?>