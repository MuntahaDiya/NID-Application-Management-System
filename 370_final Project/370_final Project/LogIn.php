<!DOCTYPE html>

<html>
    <head>
        <meta charset="uft-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title> Log In </title>

        <!--favicon-->
        <link rel="shortcut icon" type="image/Favicon_Image_Location" href="image/favicon.png"/>
        <!--gogole font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!--font awesome-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!--adding CSS-->
        <link rel="stylesheet" href="LogIn-Style.css"/>
    </head>

    <body>
	<video autoplay muted loop id = "myVideo">
		<source src = "Media/vid1.mp4" type = "video/mp4">
		Your browser does not support HTML5 video.
	</video>
	
	<?php
		$con=mysqli_connect("localhost", "root", "", "project");
	 
		if(isset($_POST['LogIn']))
		{
		    if(empty($_POST['name']) || empty($_POST['password']))
		    {
				header("location:LogIn.php?Empty= Please Fill in the Blanks");
		    }
		   
		    else
		    {
				$password=$_POST['password'];
				$pas=md5($password);
				$query="select * from user where username='".$_POST['name']."' and password='$pas'";
				$result=mysqli_query($con,$query);
	 
				if(mysqli_fetch_assoc($result))
				{
					header("location:Register.html");
				}
				else
				{
					header("location:LogIn.php?Invalid= Please Enter Correct Username and Password");
				}
		    }
		}
	?>
        <div class="loginbox">
            <img src="Media/avatar.png" class="avatar" alt="Image not Found!">
            <h1> Login Here </h1> <br>
			
			<?php 
				if(@$_GET['Empty']==true)
				{
			?>
					<p  style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['Empty'] ?></p>                               
			<?php
				}
			?>
			
			<?php 
				if(@$_GET['Invalid']==true)
				{
			?>
					<p style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['Invalid'] ?></p>                               
			<?php
				}
            ?>
					
            <form action = "#" method="post">
                <p> Username*</p>
                <input type="text" name="name" placeholder="Enter Username">
				<br><br>
                <p> Password* </p>
                <input type="password" name="password" placeholder="Enter Password">
				<br><br>
                <input class="btn" type="submit" value="Log In" name="LogIn"> <br>
                
                <a href="#"> Forgot Password? </a> <br><br>
                <a href="SignUp.php"> Sign up </a>
            </form>
         </div>  
    </body>
</html>