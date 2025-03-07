<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from games_images where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Games Images </h4>
				   <h4 class="box-link"><a href="manage_games_images.php" class="btn btn-dark">Add Games Images</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial" width="2%">#</th>
							   <th width="2%">ID</th>
							   
							   <th width="7%">Name</th>
							   <th width="7%">Images</th>
							   
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
						 <?php                                                                                                               
								$i=1;
								$cat_res=mysqli_query($con,"select * from games order by id desc");
								$cat_arr=array();
								while($row=mysqli_fetch_assoc($cat_res)){
								  $cat_arr[]=$row;    
								}
								 foreach($cat_arr as $list){
								  $games_id=$list['id'];
								?>
										 <?php                                                                                                               
								
								$cat_res1=mysqli_query($con,"select * from games_images where games_id='$games_id'");
								$cat_arr1=array();
								while($row1=mysqli_fetch_assoc($cat_res1)){
								  $cat_arr1[]=$row1;    
								}
								 foreach($cat_arr1 as $list1){
								
								?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $list1['id']?></td>
							   
							  
							   <td><?php echo $list['name']?></td>
							   
							   <td><?php echo $list1['image']?></td>
							   
							   
							
							   
							   </td>
							   <td>
								<?php
								    if($_SESSION['ROLE']=='admin'){
								        							        								echo "<span class='badge badge-dark'><a href='manage_rename_games_images.php?id=".$list1['id']."'>Rename</a></span>&nbsp;";

							        								echo "<span class='badge badge-edit'><a href='manage_games_images.php?id=".$list1['id']."'>Edit</a></span>&nbsp;";

								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$list1['id']."'>Delete</a></span>";

							        }else{
							  
								echo "<span class='badge badge-edit'><a href='manage_games_images.php?id=".$list1['id']."'>Edit</a></span>&nbsp;";
							        }
								?>
							   </td>
							</tr>
							<?php $i++; } }?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>