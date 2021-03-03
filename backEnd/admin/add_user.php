<?php
session_start();
if($_SESSION['admin_id']==NULL){
    header('location:../login.php');
}
include '../functions/logout.php';

if(isset($_GET['logout']))
{
    $logout= new Logout;
    $logout->logout();
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

  <title>Add User</title>
  <?php include 'includes/head.php'?>

<body>
    
  <?php include 'includes/preloader.php';?>
  
    <div id="main-wrapper">
        
       <?php include 'includes/header.php'?>
       
      <?php include 'includes/aside.php'?>
      
        <div class="page-wrapper">
           
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <!-- <h4 class="page-title">Add User</h4> -->
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                   
                    <?php include 'layouts/add_user.php';?>

                    <!-- Column -->
                   
                </div>
        
   
            </div>
           
         <?php include 'includes/footer.php'?>
           
        </div>
      
    </div>
   
    <?php include 'includes/js.php'?>

</body>

</html>