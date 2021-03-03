<?php

class Logout{
	public function logout(){
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_name']);
	unset($_SESSION['admin_email']);
	unset($_SESSION['admin_password']);

    header('location:../login.php');
	}
}
?>