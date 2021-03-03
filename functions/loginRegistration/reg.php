<?php
Class Registration{

public function userRegistration(){

	extract($_POST);
	$error = 0;

	if($name==""){
		$error++;
	}
	if($email==""){
		$error++;
	}

	if($phone==""){
		$error++;
	}
	if(@$gender==""){
		$error++;
	}

	if($country_id==""){
		$error++;
	}

	if($password==""){
		$error++;
	}


	if($error==0)
	{   extract($_POST);
		
		// include '../connection/connection.php';	
	$conn= mysqli_connect('localhost','root','','blog');

		$sql1= "SELECT* from user";
		$duplicate=mysqli_query($conn,$sql1);
		$get= mysqli_fetch_assoc($duplicate);

		if($email==$get['email'])
		{
			return "This Email already taken... Please use another email ";
		}
		
		else
		{

		$sql= "INSERT INTO user (name,email,phone,gender,country_id,password,status) VALUES ('$name','$email','$phone','$gender','$country_id','$password')";
		$result=mysqli_query($conn,$sql);
	
			return "Registration Complete... Waiting For Admin Approval...";
			
		}

	}

	else {  
			
			// header("location:../../frontEnd/blogging.php");
		echo"<script>alert('Warning!!! All Field Required...')</script>";



	}





}

}



?>