<?php
class Delete_user{

	public function deleteUserInfo($id){
		extract($_GET);
        $conn= mysqli_connect('localhost','root','','blog');
        $sql="DELETE from user WHERE id=$id";
        $delete=mysqli_query($conn, $sql);
        if($delete){
        	 echo "<script> location.replace('manage_user.php'); </script>";
        }
		
		
	}
}

?>