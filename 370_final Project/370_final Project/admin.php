<html>
<head>
<title>Admin Panel  </title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="C:\xampp\htdocs\myProject\bg.png">
<h3> Welcome to Admin Panel  </h3></center>
</div>

<div id="sidemenu">
 <ul>
    
    <a href="http://localhost/myProject/add_user.php"><li> Add Data </li></a>
   <a href="http://localhost/myProject/delete_user.php"> <li> Delete Data </li></a>
    <a href="http://localhost/myProject/Updateuser.php"><li> Update Data </li></a>

	
    <a href="https://www.facebook.com/||sanjeeda||" target="blank" style="color: black; text-decoration: none;"><li> Developer </li></a>
</ul>
</div>

<div id="data">
<br><br>

<center><h1>Data available</h1></center>
<?php
    include 'DBconnection.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM user_login";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    //echo "<h4>ID: </h4>" . $row["Admin Id"]. "<br>" . "  Name: " . $row["Name"].  " <br> " .  "Email: " . $row["Email"] .  "<br>" . "Password: " . $row["Password"]. "<br><br><br>";
        //";
}
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?>
</div>

</body>
</html>