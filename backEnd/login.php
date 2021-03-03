<?php
session_start();
include 'functions/Login.php';

if(isset($_SESSION['admin_id'])){
header('location:admin/index.php');
}

if(isset($_POST['login'])){
$login= new Login();
$error=$login->login();

if($error)
{
    echo "<script>alert('$error')</script>";
}
}
?>



<title>Admin Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<style type="text/css">
    
    .login-container{

    margin-top: 5%;
    width: 40%;
  
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}



.login-container form{

    padding: 5%;
    width: 100%;

}
.btnSubmit
{
    width: 50%;
    border-radius: 5px;
    padding: 1%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}


.login-form-1 .ForgetPwd{

    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

</style>




<div class="container login-container mt-5 " >
            <div class="row">
                <div class="col-md-12 login-form-1" style="margin-top: 100px">
                    <h3 style="margin-left: 17px">Admin Login</h3>
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email" />
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="login" value="Login" />
        
                        </div>
                    </form>
        
                </div>
            </div>
        </div>

    </body>