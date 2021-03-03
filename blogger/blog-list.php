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
<head>
    <title>Blog List</title>
    
    <!-- Meta -->
<?php include 'includes/head.php';?>

</head> 

<body>
    
  <?php include 'includes/header.php';?>
    
    <div class="main-wrapper">
	    
   <?php include 'layouts/manage_post.php'?>
	    
	<?php include 'includes/footer.php';?>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
   

    
       
    <!-- Javascript -->          
<?php include'includes/js.php'?>   
   
    

</body>
</html> 

