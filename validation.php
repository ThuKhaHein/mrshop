<?php

session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'online-shop');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from register where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:editpage.php');
}else{
	header('location:editpage.php');
	
}

?>