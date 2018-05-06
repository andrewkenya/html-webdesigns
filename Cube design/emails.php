<?php
$servername ="localhost";
$username="root";
$password="user";
$dbname="newsletter";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
	die("Connection failed: ".mysqli_conect_error());

}
$sql ="INSERT INTO emails(email)VALUES('".mysqli_real_escape_string($_POST['email'])."')");
echo "Your Email has been submitted successfully.";
}else{
	echo "Error in submitting the form";

}
?>