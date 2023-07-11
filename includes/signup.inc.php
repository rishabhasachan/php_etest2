<?php
session_start();
include '../dbh.php';

$first =$_POST['first'];
$last =$_POST['last'];
$uid =$_POST['uid'];
$pwd =$_POST['pwd'];

//following code check weather any field is empty or not 
//if any one of following are empty then you can not log in 
if(empty($first)){
	header("location: ../signup.php?error=empty");
	exit();
}

if(empty($last)){
	header("location: ../signup.php?error=empty");
	exit();
}

if(empty($uid)){
	header("location: ../signup.php?error=empty");
	exit();
}

if(empty($pwd)){
	header("location: ../signup.php?error=empty");
	exit();
}

//FOLLOWING CODE IF TO INSERT FIELDS IN DATABASE

else{
$sql="insert into user(first, last, uid, pwd)
values('$first','$last','$uid','$pwd')";
$result=$conn->query($sql);
header("location: ../index.php"); 
}