<!DOCTYPE html>

<html>
    <head>
        <meta charset="uft-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title> Registration Form </title>
        <!--favicon-->
        <link rel="shortcut icon" type="image/Favicon_Image_Location" href="image/favicon.png"/>
        <!--gogole font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans:ital@0;1&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!--font awesome-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!--adding CSS-->
        <link rel="stylesheet" href="Register-Style.css"/>
		
		<div>
            <div class="logo">
                <a href="Home.html">E-Card</a>
            </div>

            <nav id="navbar">
                <ul>
                    <li><a href="Home.html">Home</a></li><li>
                    <a href="Register.php" class="active">Registration</a></li><li>
                    <a href="Booking.php">Book Time Slot</a></li><li>
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
     
        if(isset($_POST['Submit']))
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $gender=$_POST['gender']; 
            $bg=$_POST['bg'];
            $bcno=$_POST['bcno'];
            $faname=$_POST['faname'];
            $fanid=$_POST['fanid'];
            $maname=$_POST['maname'];
            $manid=$_POST['manid'];
            $maritalstat=$_POST['maritalstat'];
            $presentaddress=$_POST['presentaddress'];
            $permanentaddress=$_POST['permanentaddress'];
            $edu=$_POST['edu'];
            $work=$_POST['work'];
            
            
            if(empty($_POST['fname']) || empty($_POST['lname'])|| empty($_POST['gender']) || empty($_POST['bg'])|| empty($_POST['bcno'])|| empty($_POST['faname'])|| empty($_POST['fanid'])|| empty($_POST['maname']) || empty($_POST['manid']) || empty($_POST['maritalstat']) || empty($_POST['presentaddress'])|| empty($_POST['permanentaddress'])|| empty($_POST['edu'])|| empty($_POST['work']) )
            {
                header("location:Register.php?Empty= Please Fill in the Blanks");
            }
           
            else
            {
                $Usql="select * from register where bcno='$bcno'";
                $result=mysqli_query($db,$Usql);
     
                if(mysqli_num_rows($result)>0)
                {
                    header("location:Register.php?Invalid= Please fill up the form correctly");
                }
                else
                {
					$sql="INSERT INTO register(fname, lname, gender, bg, bcno, faname, fanid, maname, manid, maritalstat, presentaddress, permanentaddress, edu, work) VALUES ('$fname', '$lname', '$gender' '$bg', '$bcno', '$faname', '$fanid', '$maname', '$manid' , '$maritalstat', '$presentaddress', '$permanentaddress', '$edu', '$work')";
                    mysqli_query($db, $sql);
                    
                    echo '<script language="javascript">';
                    echo 'alert("Registration Sucessful")';
                    echo '</script>';
                    header("location:Register.php?RegistrationSuccessful");    
                }
            }
        }
    ?>
	
    <div class="main">
			<br><br><br><br><br>
            <div class="register">
                <br><h2>Registration Form</h2>
                
                <?php 
                    if(@$_GET['Empty']== true)
                    {
                ?>
                    <br><br><p  style="color:red;text-align:center;margin-top:-25px;"><?php echo $_GET['Empty'] ?></p>                               
                <?php
                    }
                ?>
				<form id="register" action = "#" method="post">
					<h3>Full Name </h3>
					<br><label>First Name*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label> 
					<input type="text" name="fname" id="fname" placeholder="Enter Your First Name"><br> <br>
					<label>Last Name*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label> 
					<input type="text" name="lname" id="lname" placeholder="Enter Your Last Name">
					<br> <br>
					<label>Gender*:</label> 
					<br>
					<input type = "radio" name = "gender" id = "gender" value = "m"/> Male
					<input type = "radio" name = "gender" id = "gender" value = "n"/> Female
					<input type = "radio" name = "gender" id = "gender" value = "t"/> Third Gender
					<br>
					<br>
					<label> Blood Group*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<select name = "bg" id = "bg" style="width:100px; height:30px; font-size: 18px;"> 
						<option value = "a"> A+ </option>
						<option value = "b"> B+ </option>
						<option value = "ab"> AB+ </option>
						<option value = "o"> O+ </option>
						<option value = "a-neg"> A- </option>
						<option value = "b-neg"> B- </option>
						<option value = "ab-neg"> AB- </option>
						<option value = "o-neg"> O- </option>
					</select>
					<br>
					<br>
					<label> Birth Certificate Number*: &nbsp; &nbsp;</label>
					<input type="text" name="bcno" id="bcno" placeholder="Birth Certificate Number">
					<div class="parent-info">
						<div class="father-info">
							<br><br><h3>Father's Info</h3>
							<br><label>Father's Name*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
							<input type="text" name="faname" id="faname" placeholder="Enter Your Father's Name">
							<br> <br>
							<label> Father's NID Number*: &nbsp; &nbsp; &nbsp; &nbsp;</label>
							<input type="text" name="fanid" id="fanid" placeholder="Enter Your Father's NID Number">
						</div>
						<div class="mother-info">
							<br><br><h3>Mother's Info</h3>
							<br><label>Mother's Name*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
							<input type="text" name="maname" id="maname" placeholder="Enter Your Mother's Name">
							<br><br>
							<label> Mother's NID Number*: &nbsp; &nbsp; &nbsp; &nbsp;</label>
							<input type="text" name="manid" id="manid" placeholder="Enter Your Mother's NID Number"> <br><br>
						</div>
					</div>
					<br><br><label>Marital Status*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type = "radio" name = "maritalstat" id = = "maritalstat" value = "si"/> Single &nbsp;
					<input type = "radio" name = "maritalstat" id = = "maritalstat" value = "ma"/> Married &nbsp;
					<input type = "radio" name = "maritalstat" id = = "maritalstat" value = "di"/> Divorced &nbsp;
					<input type = "radio" name = "maritalstat" id = = "maritalstat" value = "wi"/> Widowed &nbsp;
					<br>
					<br>
					<h3>Address Info</h3>
					<br><label> Present Address*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="textarea" name="presentaddress" id="presentaddress" placeholder="Present Address">
					<br><br>
					<label> Permanent Address*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="textarea" name="permanentaddress" id="permanentaddress" placeholder="Permanent Address">
					<br><br><h3>Educational Qualification</h3>
					<br><label>Completed*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="text" name="edu" id="edu" placeholder="Enter Last Degree">
					<br> <br>
					<label>Profession*: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
					<input type="text" name="work" id="work" placeholder="Enter Profession">
					<br>
					<div class="submit">
						<input class="btn" type="Submit" name="Submit" value="Submit">
					</div>
				</form>
		</div>
        </div>
    </body>
</html>