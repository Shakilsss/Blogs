<?php
include '../connection/connection.php';	
if(isset($_POST['btn1']))
{
	extract($_POST);
	$error = 0;


	if($email==""){
		$error++;
	}

	if($password==""){
		$error++;
	}


	if($error==0)
	{   extract($_POST);
		
		$sql= " SELECT* FROM user WHERE email='$email' && password='$password' ";
		
		$result=mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
		if ($user)
		{	
		    // $_SESSION['message'] = 'Error';
 

		    session_start();
		    $_SESSION['id']=$user['id'];
		    $_SESSION['name']=$user['name'];
		   $status = $_SESSION['status']=$user['status'];
            // extract($_POST);
		    if($status==1){

			 header("location:../../blogger/home.php");

		    }

		    else{
		     session_start();
		      $_SESSION['msg']="Your account not approved yet. Wait for admin approval";	
			  unset($_SESSION['id']);
			  unset($_SESSION['name']);
		      header("location:../../frontEnd/blogging.php");

		    }

		}

		else {
            
			header("location:../../frontEnd/blogging.php");


		}
	}

	else {
		

			header("location:../../frontEnd/blogging.php");


	}



}



?>