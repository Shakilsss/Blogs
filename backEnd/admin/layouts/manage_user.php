<?php
include '../functions/connection.php';
include '../functions/user_status.php';
include '../functions/Delete_user.php';


if(isset($_GET['unpublished_id'])){
$status= new User_Status();
$status->unPublished($_GET['unpublished_id']);
}

if(isset($_GET['published_id'])){
$status= new User_Status();    
$status->published($_GET['published_id']);
}

if(isset($_GET['status']))
{
    $delete = new Delete_user();
   $delete->deleteUserInfo($_GET['id']);
 

}

$sql= "SELECT* from user";

$res=mysqli_query($conn,$sql);

?>
   <div class="card">
                            <div class="card-body">
                              
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sl no.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php $i=1;?>
                                        <tbody>
                                            <?php  while($get=mysqli_fetch_assoc($res)){?>
                                            <tr>
                                                <td><?php echo $i++?></td>
                                                <td><?php echo $get['name'];?></td>
                                                <td><?php echo $get['email'];?></td>
                                                <td><?php echo $get['phone'];?></td>
                                                <td><?php echo $get['status'];?></td>
                                                <td>
<?php if($get['status']==1)
{
 echo '<a href="?unpublished_id='.$get['id'].'">'.'<button type="button" class="btn btn-success btn-sm">Published</button></a>';
}
else

{
 echo '<a href="?published_id='.$get['id'].'">'.'<button type="button" class="btn btn-warning btn-sm">Unpublished</button></a>';
}

?>


<a href="?status=delete&&id=<?php echo $get['id'];?>"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
        </td>
    </tr>

<?php }?>

                                           
                                               
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>