<?php
include '../functions/connection.php';
include '../functions/update.php';

$sql= "SELECT* FROM post";
$get=mysqli_query($conn, $sql);
$get_data=mysqli_fetch_assoc($get);

if(isset($_POST['btn']))
{
$update = new Update();
$res= $update->update();


      if($res){
          echo "<script> location.replace('manage_post.php'); </script>";
      }

      else 
        die('error'.mysqli_error('conn'));


}
?>

<div class="card">
<div class="card-body mt-5">
  <article class="blog-post px-3 py-5 p-md-5" style="margin-top: -75px">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2">Edit Post</h2>
				    
			    </header>

<div class="blog-post-body">
    <figure class="blog-banner">
		
<form  method="POST" action="" enctype="multipart/form-data">
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlFile1">Edit Title</label>
  	<input class="form-control form-control-sm" type="text" value="<?php echo $get_data['title']?>" name="title" style="width:60%">
    <input type="hidden" name="id" value="<?php echo $get_data['id']?>">
<!-- 
  </div>
  	<div class="form-group">
    <label for="exampleFormControlFile1"></label>
  	<input class="form-control form-control-sm" type="text" placeholder="" style="width:60%">

  </div> -->
  

  	  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" name="image" value="<?php echo $get_data['image']?>" id="exampleFormControlFile1">
  </div>	
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Edit Blog Details</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details" style="width:60%"><?php echo $get_data['details']?></textarea>
  </div>

  </div>
  <input type="submit" name="btn" class="btn btn-info" value="Done">
</form>

    </figure>
				    
	</div><!--//container-->
</div>
	    </section>

</div>

</div>
