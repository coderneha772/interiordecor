<?php
include('config.php');
$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['psword'];
$message=$_REQUEST['msg'];
$query = "INSERT INTO contact(firstname,lastname,email,password,message) VALUES('$firstname','$lastname','$email','$password','$message')";
//echo $query;die();
if($conn->query($query) === TRUE){
	echo "Data Inserted";
}
else{
	echo"Data not inserted" .$conn->error;
} 
$conn->close();
?>
	

