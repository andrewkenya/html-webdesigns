<?php
$host ="localhost";
$username="root";
$pass = "user";
$db = "newsletters";

//create connection
$conn = mysqli_connect($host,$username,$pass,$db);
//check connection
if(!$conn){
	die("Connection failed: ".mysqli_conect_error());

}
$your_email ='test@myemail.com';
?>