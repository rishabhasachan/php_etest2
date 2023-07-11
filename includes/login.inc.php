<?php
session_start();
include '../dbh.php';

$uid =$_POST['uid'];
$pwd =$_POST['pwd'];


$sql="select * from user where uid='$uid' and pwd='$pwd'";
		$result=$conn->query($sql);
		if(!$row = $result->fetch_assoc()){
			echo "Your username or password is incorrect!";
			
			header("location: ../index.php?error=emptylogin");
			exit();
			
		}
		else{
				$_SESSION['id']=$row['id'];	
				header("Location: ../test.php");
				
			}
	
			