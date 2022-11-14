<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Booking-style.css">
		<title>Booking</title>
	
		<div>
				<div class="logo">
					<a href="Home.html">E-Card</a>
				</div>

				<nav id="navbar">
					<ul>
						<li><a href="Home.html">Home</a></li><li>
						<a href="Register.php">Registration</a></li><li>
						<a href="Booking.php" class="active">Book Time Slot</a></li><li>
						<a href="LogIn.php">Log Out</a></li><li>
					</ul>
				</nav>
        </div>
    </head>     
    
	<body>
		<video autoplay muted loop id = "myVideo">
			<source src = "Media/vid2.mp4" type = "video/mp4">
			Your browser does not support HTML5 video.
		</video>
		<?php
			$db=mysqli_connect("localhost", "root", "", "project");
		 
			if(isset($_POST['submit']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$number=$_POST['number']; 
				$date=$_POST['date'];
				
				
				
				if(empty($_POST['name']) || empty($_POST['email'])|| empty($_POST['number']) || empty($_POST['date']))
				{
					header("location:booking.php?Empty= Please Fill in the Blanks");
				}
			   
				else
				{
					$sql="INSERT INTO booking(name, email, number, date) VALUES ('$name', '$email', '$number', '$date')";
					mysqli_query($db, $sql);
						
					echo "<script>alert('Booking Successful');</script>";
						
					header("location:booking.php?BookingSuccessful");
				}
			}
		?>
			<div class="main">
				<div class="booking">
					<br><h2>Booking for NID Picture</h2>
					<form action="#" class="form_design" method="post">
						<br>
						<?php 
							if(@$_GET['Empty']==true)
							{
						?>
								<p  style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['Empty'] ?></p>                               
						<?php
							}
						?>
						<br>
						<label for="name">Name*: </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="text" name="name" id="name" required placeholder="Your name" ><br><br>
						<label for="email">Email*: </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="text" name="email" id="email" required placeholder="Your Email"><br><br>
						<label for="mobile">Mobile*: </label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="text" id="number" name="number" required placeholder="Enter mobile number" ><br><br>
						<label for="date">Booking date*: </label> &nbsp; &nbsp; 
						<input type="date" id="date" name="date" min="2021-03-09"><br><br>
						<button class="btn" name="submit" type="submit" id="modalBtn" value="submit">Submit</button>
		
					</form>
				</div>
		</div>
    </body> 
</html>        