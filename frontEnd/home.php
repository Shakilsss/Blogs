<?php

session_start();
if(@$_SESSION['id']){
    header('Location:/blog/blogger/home.php');
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

