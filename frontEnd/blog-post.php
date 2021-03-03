<?php

session_start();
if(@$_SESSION['id']){
    header('Location:/blog/blogger/home.php');
}

?>

<!DOCTYPE html>
<html lang="en"> 
<?php include 'includes/head.php';?>
<title>Blog Posts</title>
<body>
    
    <?php include'includes/header.php';?>
    
    <div class="main-wrapper">


<section class="blog-list px-3 py-5 p-md-5"><?php include 'layouts/post.body.php';?></section>
<?php include 'includes/footer.php';?>

    </div><!--//main-wrapper-->
    
    
    

       
    <!-- Javascript -->          
<?php include'includes/js.php'?>   
    

</body>
</html> 

