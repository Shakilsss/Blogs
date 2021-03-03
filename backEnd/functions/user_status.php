<?php
class User_Status{

	public function published($published_id){
        extract($_GET);
		$conn= mysqli_connect('localhost','root','','blog');
    	$sql= "UPDATE user SET status=1 WHERE id=$published_id";
    	$res=mysqli_query($conn,$sql);
    
    	if($res){
    		// header("location: manage_post.php");
          echo "<script> location.replace('manage_user.php'); </script>";
    	}
	}
	public function unPublished($unpublished_id){
		extract($_GET);
		$conn= mysqli_connect('localhost','root','','blog');
    	$sql= "UPDATE user SET status=0 WHERE id=$unpublished_id";
    	
    	$res=mysqli_query($conn,$sql);
    
    	if($res){
          echo "<script> location.replace('manage_user.php'); </script>";
            
    		// header("location: manage_post.php");
            // exit();
    	}
	}
}

?>