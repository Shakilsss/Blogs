<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:/blog/index.php');
}

include '../functions/loginRegistration/logout.php';
if(isset($_GET['logout'])){
	$logout= new logOut();
    $logout->logout();
}

?>


<!DOCTYPE html>
<html lang="en"> 
<?php include 'includes/head.php';?>
<title>Blogs Time</title>
<body>
    
    <?php include'includes/header.php';?>
    
    <div class="main-wrapper">
<?php include 'includes/topHeader.php'?>

<section class="blog-list px-3 py-5 p-md-5"><div class="container"><?php include 'layouts/home.body.php';?></div></section>
<?php include 'includes/footer.php';?>

    </div><!--//main-wrapper-->
    
    
    

       
    <!-- Javascript -->          
<?php include'includes/js.php'?>   
  

</body>
</html> 

