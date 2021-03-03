<?php
session_start();
include '../functions/connection.php';
include '../functions/logout.php';
if($_SESSION['admin_id']==NULL){
    header('location:../login.php');
}
if(isset($_GET['logout']))
{
    $logout= new Logout;
    $logout->logout();
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

  <title>Admin Dashboard</title>
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php
             extract($_POST);
             $con=mysqli_connect('localhost','root','','blog');
             $active="SELECT* from user";
             $active_post="SELECT* from post where status=1";
             $inactive="SELECT* from user where status=0";
             $inactive_post="SELECT* from post where status=0";
             $get_active_user=mysqli_query($con,$active);
             $get_inactive_user=mysqli_query($con,$inactive);

             $get_active_post=mysqli_query($con,$active_post);
             $get_inactive_post=mysqli_query($con,$inactive_post);
             // $rows=mysqli_num_rows($get);
             // $rows=;
             
         

             // print_r($get);
             // die();
            ?>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="fa fa-user"></i></h1>
                                <h5 class="m-b-0 m-t-5 text-white"><?php echo mysqli_num_rows($get_active_user)?></h5>
                                <h6 class="text-white">Active User</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="fa fa-user-plus"></i></h1>
                                <h5 class="m-b-0 m-t-5 text-white"><?php echo mysqli_num_rows($get_inactive_user)?></h5>
                                <h6 class="text-white">Pending User</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-primary text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                             <h5 class="m-b-0 m-t-5 text-white"><?php echo mysqli_num_rows($get_active_post)?></h5>
                                <h6 class="text-white">Total Post</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="fa fa-table"></i></h1>
                                <h5 class="m-b-0 m-t-5 text-white"><?php echo mysqli_num_rows($get_inactive_post)?></h5>
                                <h6 class="text-white">Panding Post</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                   
                </div>
        
   
            </div>
           
         <?php include 'includes/footer.php'?>
           
        </div>
      
    </div>
   
    <?php include 'includes/js.php'?>


</body>

</html>-
