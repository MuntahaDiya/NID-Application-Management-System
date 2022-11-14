<?php
// first of all, we need to connect to the database
require_once('DBconnection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['sid']) && isset($_POST['sname']) && isset($_POST['eml']) && isset($_POST['dep'])&& isset($_POST['scl'])&& isset($_POST['cgpa'])&& isset($_POST['add'])&& isset($_POST['use'])&& isset($_POST['wod']) && isset($_POST['phn'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['adminid'];
	$p = $_POST['name'];
	$c = $_POST['emaill'];
	$d = $_POST['phonenumber'];
	$t = $_POST['password'];

	
	$sql = " Update student set student_name= '$p', email= '$c', Department= '$d', Scholarship_id= '$t', CGPA= '$g', Address='$a', username='$n', password= '$w', phone = '$h' where student_id = '$u' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: SearchbyID.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: UpdateStudent.php");
	}
	
}


?>