<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from pageslay where id='$id'";
		mysqli_query($con,$delete_sql);
	}
		if($type=='status'){
	    $id=get_safe_value($con,$_GET['id']);
		$s=get_safe_value($con,$_GET['status']);
		$s_sql="update pageslay set status='$s' where id='$id'";
		mysqli_query($con,$s_sql);
		redirect("pages.php");
	}
}

$sql="select * from pageslay order by pageslay.id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Pages </h4>
				   <h4 class="box-link"><a href="manage_pages.php" class="btn btn-dark">Add Pages</a> </h4>
				</div>
				<div class="card-body--"> 
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="17%">Title</th>
							   <th width="50%">Short Content</th>
							   <th width="6%">Pages</th>
							   <th width="20%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['title']?></td>
                               <td><?php echo $row['des']?></td>
                               <td><?php echo $row['pages'];?></td>
							   <td>
								<?php
								    if($_SESSION['ROLE']=='admin'){
								        if($row['status']=='0'){
								echo "<span class='badge badge-warning'style='margin-right:5px;'><a href='?type=status&id=".$row['id']."&status=1'>Pending</a></span>";
							        }else{
								echo "<span class='badge badge-success'style='margin-right:5px;'><a href='?type=status&id=".$row['id']."&status=0'>Approved</a></span>";
							        }
							        								echo "<span class='badge badge-edit'><a href='manage_pages.php?id=".$row['id']."'>Edit</a></span>&nbsp;";

								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";

							        }else{
							        	        if($row['status']=='0'){
								echo "<span class='badge badge-warning'style='margin-right:5px;'><a>Pending</a></span>";
							        }else{
								echo "<span class='badge badge-success'style='margin-right:5px;'><a>Approved</a></span>";
							        }
								echo "<span class='badge badge-edit'><a href='manage_pages.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
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
<?php
function sendNotification($token,$description,$title,$icon_url,$action_url){
    $url ="https://fcm.googleapis.com/fcm/send";
    $fields=array(
        "to"=>$token,
        "notification"=>array(
            "body"=>$description,
            "title"=>$title,
            "icon"=>$icon_url,
            "click_action"=>$action_url
            )
    );

    $headers=array(
        'Authorization: key=AAAA8nRKI6Y:APA91bGj4QiQ59fjcqQ5ryTom_Pzmf5kG0hZJQXN3326Fkg3hOiHMN1pNbEcy1nZJjSkWHr_Xq10yHPox1znB2cOuzB1BSFS5b6TTxpAtKnF1EHmO2uHOynPwW6c3k3If1wd7BA0hcd1',
        'Content-Type:application/json'
    );

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result=curl_exec($ch);
    //print_r($result);
    curl_close($ch);
    
}
?>