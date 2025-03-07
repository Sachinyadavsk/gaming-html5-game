<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from games_videos where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select games.name,games_videos.* from games,games_videos order by games_videos.id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Games Videos </h4>
				   <h4 class="box-link"><a href="manage_product.php" class="btn btn-dark">Add Games Videos</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial" width="2%">#</th>
							   <th width="2%">ID</th>
							   
							   <th width="7%">Name</th>
							   <th width="7%">Videos</th>
							   
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   
							  
							   <td><?php echo $row['name']?></td>
							   
							   <td><?php echo $row['video']?></td>
							   
							   
							
							   
							   </td>
							   <td>
								<?php
								    if($_SESSION['ROLE']=='admin'){
							        								echo "<span class='badge badge-edit'><a href='manage_games_variants.php?id=".$row['id']."'>Edit</a></span>&nbsp;";

								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";

							        }else{
							  
								echo "<span class='badge badge-edit'><a href='manage_games_variants.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
							        }
								?>
							   </td>
							</tr>
							<?php $i++; } ?>
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