<?php
class Update{

	public function update(){
		extract($_POST);
		$conn= mysqli_connect('localhost','root','','blog');
    	$sql= "UPDATE post SET title='$title' , image='$image' details='$details' WHERE id=$id";
    	$res=mysqli_query($conn,$sql);
    	if($res){
          echo "<script> location.replace('manage_post.php'); </script>";
    	}
	}
}

?>