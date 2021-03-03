<?php
include 'connection.php';

class Login{

public function login(){
extract($_POST);

$conn= mysqli_connect('localhost','root','','blog');
$sql="SELECT* FROM admin WHERE email='$email' && password ='$password'";

$login= mysqli_query($conn,$sql);
if($login){

$admin_login=mysqli_fetch_assoc($login);

if($admin_login){
    session_start();
    $_SESSION['admin_id']=$admin_login['id'];
    $_SESSION['admin_name']=$admin_login['name'];
    $_SESSION['admin_email']=$admin_login['email'];
    $_SESSION['admin_password']=$admin_login['password'];
    
    header('location:admin/index.php');
}

else {
      
      return "Wrong!!! Email or Password...";
}


} //if(login)

else
    { die('Query Problem'.mysqli_error($conn)); } 

} //function

} //class

?>