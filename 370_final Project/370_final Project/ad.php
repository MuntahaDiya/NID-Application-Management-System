<?php
//connect dba_close
include('DBconnection.php');

//checking if the input empty
if(isset($_POST['id'])&& isset($_POST['name'])&& isset($_POST['wod'])){
	//write the query to check is this smthn exists or not
	echo"working";
		$u= $_POST['id'];
		$e=$_POST['name'];
		$p=$_POST['wod'];
		//$r=$_POST['phn'];
		$sql="INSERT INTO adinfo (Admin_id,Admin_name,Admin_Password) VALUES ('$u','$e','$p')";
		//Execute the query
		$res=mysqli_query($conn, $sql);
	//echo $sql;
		if($res){
			
			echo "LEt him enter";
		}
		else{
			echo "nothing";
			}		
			
}	





?>