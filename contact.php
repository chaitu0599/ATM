<?php
$name=$_POST['name'];
		$email=$_POST['email'];
		$year=$_POST['year'];
		$branch=$_POST['branch'];
		$section=$_POST['section'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
$conn=new mysqli('localhost','root','','atm');
	if($conn->connect_error){
		die('Connection Failed:'.$conn->connect_error);
	}
	else
	{
		$stmt=$conn->prepare("INSERT into contact_form_inside(name,email,year,branch,section,phone,message) values (?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssss",$name,$email,$year,$branch,$section,$phone,$message);
		$stmt->execute();
		echo "Successfully Submitted";
		$stmt->close();
		$conn->close();
		header("location:index.html");
	}

?>