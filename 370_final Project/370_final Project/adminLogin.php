
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Welcome to admin login </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:white;"> Admin login Pannel</div>
			<div class="col-md-10" style="text-align: right; color:red;"> 
				

			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title"> Welcome  </div> <br/>
		
		<form action="ad.php" class="form_design" method="post">
            Admin Id: <input type="text" name="id"> <br/> 
            Admin Name:<input type="text" name="name"><br/>
			Password: <input type="text" name="wod"> <br/>
               <!--<input type="submit" value="login" ><br/>-->
			
			<br/>
			 
            <a href="http://localhost/myProject/admin.php"> Login </a> <br/>
		</form>
	</section>


	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

