<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>StudyWorld</title>
	<link rel="stylesheet" href="css/style0.css"/>
		<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="boot/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="boot/css/bootstrap.css"/>
	<script src="boot/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="boot/js/dropdown.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/code.js"></script>
				<script type="text/javascript" src="js/code2.js"></script>



	
	<script src="boot/js/bootstrap.js"></script>
	
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
	<div class="navbar-header">
	<a href="index.php" class="navbar-brand"><b id="study">Online-</b><em style="color:yellow;">Test</em>
	<img class="im animated bounce" src="logo1.png" style="width:60px; float:left; margin-top:-10px;"></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#r">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	
	 
	
	<div class="collapse navbar-collapse" id="r">
	<ul class="nav navbar-nav">  
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="news.php">News</a></li>
		<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us </a></li>
	</ul>
	
	<span style="float:right;margin-right:20px; margin-top:10px;  ">
			<table  >
				<tr>
					<form action="includes/login.inc.php" method="post" >
						<td ><input type="text" name="uid" placeholder="user id" class="form-control"></td>
						<td ><input type="password" name="pwd" placeholder="password" class="form-control"></td>
						<td >
							<button type="submit" class="btn btn-default">Login</button>
						</td>
						
					</form>
						<td ><a href="signup.php"style="padding-left:10px; color:white" ><span class="glyphicon glyphicon-user" > </span> Sign Up</a></td>
						<td style="padding-left:10px">
							  <?php
							  		if(isset($_SESSION['id'])){
									echo  " <form action='includes/logout.inc.php' >
											<button class='a animated zoomIn' class='btn btn-default'>LOG OUT</button>
										    </form>" ;  
					
				} 
						      ?>
						</td >
				</tr>
			</table>
				
		</span>

	</div>
	</div>
	
	
	
	
	
</nav>