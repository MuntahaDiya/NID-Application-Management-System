<html>
<head>
<?php
 error_reporting(0);
 //include 'connection.php';
  $id = $_POST['ApplicantID'];
  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $password = $_POST['Pass'];
  $sql ="INSERT into data (id, name, email, password) values ('$id', '$name','$email','$password')";
if(!$_POST['submit']){
	if(mysqli_query($conn, $sql)){
		echo "data added successfully";
	}
	else{
  echo "All feilds must be filled";
}
}
?>
</head>
<body>
    <form action="add.php" method="POST">
			Name: <input type="text" name="Name">
			Email: <input type="email" name="Email">
			Password: <input type="password" name="Pass">
			<input type="submit" name="submit" value="add">
</form>
</body>
</html>