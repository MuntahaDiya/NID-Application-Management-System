<!DOCTYPE html>

<html>
    <head>
        <meta charset="uft-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title> Sign Up </title>

        <link rel="stylesheet" href="SignUp-Style.css"/>
    </head>
        
	<body>
	<video autoplay muted loop id = "myVideo">
		<source src = "Media/vid1.mp4" type = "video/mp4">
		Your browser does not support HTML5 video.
	</video>
	
	<?php 
		$db=mysqli_connect("localhost", "root", "", "project");
		
		if(isset($_POST['SignUpBtn'])) 
		{
			$username=$_POST['username'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$password=$_POST['password'];
		
			
			if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password']))
			{
				header("location:SignUp.php?Empty= Please Fill in the Blanks");
			}
			  
			else 
			{	
				$Usql="Select * FROM user WHERE username='$username'";
				$result=mysqli_query($db, $Usql);
				
				if(mysqli_num_rows($result)>0)
				{
					header("location:SignUp.php?NAvailable= Username Not Available");
				}
				
				else 
				{
					$password=md5($password);
					$sql="INSERT INTO user(username, email, phone, password) VALUES ('$username', '$email', '$phone', '$password')";
					mysqli_query($db, $sql);
					
					echo '<script language="javascript">';
					echo 'alert("Sign up Sucessful")';
					echo '</script>';
					header("location:LogIn.php");
				}
			}
		}
	?>
	
		<div class="main">
			<div class="signup">
				<br><h2>Sign Up Information</h2>
				
				<?php 
					if(@$_GET['Empty']== true)
					{
				?>
					<br><br><p  style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['Empty'] ?></p>                               
				<?php
					}
				?>
				
				<?php 
					if(@$_GET['NAvailable']==true)
					{
				?>
					<br><br><p style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['NAvailable'] ?></p>                               
				<?php
					}
				?>
				
				<form id="signup" action = "#" method="post">
					<label>Username*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label> 
					<input type="text" name="username" id="username" placeholder="Enter Username">
					<br> <br>
					<label>Email*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label> 
					<input type="email" name="email" id="email" placeholder="Enter Email">
					<br> <br>
					<label>Phone Number*: &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="tel" id="phone" name="phone" pattern="[0]{1}[1]{1}[0-9]{9}" placeholder="01XXXXXXXXX">
					<br><br>
					<label>Password*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="password" name="password" id="password" placeholder="Enter Password">
					<br> <br>
					<label>Confirm Password*: &nbsp;</label>
					<input type="password" name="password" id="password" placeholder="Re-type Password">
					<div>
					<input class="btn" type="submit" name="SignUpBtn" value="Sign Up">
					</div>
					<div>
					<a href="LogIn.php"> Log In </a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
