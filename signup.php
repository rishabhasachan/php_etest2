<?php
	include 'header.php';
?>

<div class="sign">
		

	
	
	<?php
	
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//ECHO $url;
		if(strpos($url,'error=empty')!==false){
			echo "******************FILL out all fields!*******************";
		}
		else if(strpos($url,'error=username')!==false){
			echo "******************USERNAME ALREDY EXIT PLEASE REGITER WITH NEW USERNAME!*******************";
		}
		
		
		if(isset($_SESSION['id'])){
			echo "You are logged in as user-id:: ";
			echo  $_SESSION['id']; 
		}  
		else{
			echo "<br/> You are not logged in!";
		}
	?>
	<br /><br />
	<div class="signup animated zoomIn">
	<h4  style="margin-left:10%;"><span class="glyphicon glyphicon-user" ></span>Register here</h4></br>
	<?php
		if(isset($_SESSION['id'])){
			echo "You are already logged in! ";
			 
		}  
		else{
			echo "
	<div class='row' >
	<div class='col-sm-8' style='margin-left:10%;'>
			<form  role='form' action='includes/signup.inc.php' method='POST'>
			<div class='form-group'>
					<label for='first'>First Name:</label>
					<input type='text' name='first' class='form-control' id='first'>
			</div>
			<div class='form-group'>
					<label for='last'>Last Name:</label>
					<input type='text' name='last' class='form-control' id='last>
			</div>
			<div class='form-group'>
					<label for='uid'>Email address:</label>
					<input type='text' name='uid' class='form-control' id='uid'>
			</div>
			<div class='form-group'>
					<label for='pwd'>Password:</label>
					<input type='password' name='pwd' class='form-control' id='pwd'>
			 </div>
			 <button type='submit' class='btn btn-default'>Submit</button><br>
	
	
	</form>
	</div>

	<div class='col-sm-4' >
			<p></p>

	</div>
	</div>";
		}
	
		?><br /><br /><br /><br />
	</div>
	<br /><br />
</div>	
<br />



</body>
</html>