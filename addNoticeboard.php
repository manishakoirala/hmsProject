<!DOCTYPE html>
<html>
<head>
	<title>add notice board</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
 <form action="" method="post">
 	Title  <input type="text" name="title"> <br>
 	Notice <input type="text" name="notice"><br>
 	Date. <input type="text" name="date"><br>
 	 <input type="submit" name="submit"  value="Add NoticeBoard">
 </form>
</body>
</html>

<?php
 include 'dbconnection.php';
 if (isset($_POST['submit'])) {
 	$title =$_POST['title'];
 	$notice=$_POST['notice'];
 	$datee=$_POST['datee'];
    
    $res = mysqli_query($connection,"INSERT INTO noticeboard(id,title,notice,datee) VALUES ('','$title','$notice','$datee')");
    if (!$res) {
        echo "INVALID QUERY";
    }


 }
?>