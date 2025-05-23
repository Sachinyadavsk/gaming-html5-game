<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from blogs where id='$id'";
		mysqli_query($con,$delete_sql);
	}
		if($type=='status'){
	    $id=get_safe_value($con,$_GET['id']);
		$s=get_safe_value($con,$_GET['status']);
		if($s==1){
		    		      $cat_res=mysqli_query($con,"select LEFT(descriptions, 50) as descr, title,image1,url from blogs where id='$id'");
               $cat_arr=array();
               while($row=mysqli_fetch_assoc($cat_res)){
                 $cat_arr[]=$row;    
               }
                foreach($cat_arr as $list){
                    $description=$list['descr'];
                    $title=$list['title'];
                    $icon_url='https://drive360.in/images/blog/'.$list['image1'];
                    $action_url='https://drive360.in/news/'.$list['url'];
                }
		        $cat_res2=mysqli_query($con,"select * from tokens");
               $cat_arr2=array();
               while($row2=mysqli_fetch_assoc($cat_res2)){
                 $cat_arr2[]=$row2;    
               }
                foreach($cat_arr2 as $list2){
                    $token=$list2['token'];
                    //sendNotification($token,$description,$title,$icon_url,$action_url);
                }
                	     $cat_re=mysqli_query($con,"select * from notifications where title='$title'&&description='$description'&&icon_url='$icon_url'&&action_url='$action_url'");
	     $check_user=mysqli_num_rows($cat_re);
	     if($check_user>0){
	                  $cat_ar=array();
               while($ro=mysqli_fetch_assoc($cat_re)){
                 $cat_ar[]=$ro;    
               }
                foreach($cat_ar as $lis){
                    $count=$lis['shoot_count'];
                    $count++;
                    mysqli_query($con,"update notifications set shoot_count='$count' where title='$title'&&description='$description'&&icon_url='$icon_url'&&action_url='$action_url'");
	     }
	     }else{
	     mysqli_query($con,"insert into notifications(title,description,icon_url,action_url,shoot_count,created_on) values('$title','$description','$icon_url','$action_url','1',now())");
	     }
	     
		}
		$s_sql="update blogs set status='$s' where id='$id'";
		mysqli_query($con,$s_sql);
		redirect("blogs.php");
	}
}

$sql="select * from blogs order by blogs.id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Blogs </h4>
				   <h4 class="box-link"><a href="manage_blogs.php" class="btn btn-dark">Add Blog</a> </h4>
				   <h4 class="box-link"><a href="blog-images.php" class="btn btn-success">More Blog Images</a> </h4>
				</div>
				<div class="card-body--"> 
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="7%">Date</th>
							   <th width="10%">Added By</th>
							   <th width="40%">Title</th>
							   <th width="10%">Image</th>
                               
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
                               <td><?php echo $row['datee']?></td>
                               <td><?php echo $row['added_by'];?></td>
							   <td><?php echo $row['title']?></td>
							   <td><img src="<?php echo '../images/blog/'.$row['image1']?>" alt=""></td>
							   
							   <td>
								<?php
								    if($_SESSION['ROLE']=='admin'){
								        if($row['status']=='0'){
								echo "<span class='badge badge-warning'style='margin-right:5px;'><a href='?type=status&id=".$row['id']."&status=1'>Pending</a></span>";
							        }else{
								echo "<span class='badge badge-success'style='margin-right:5px;'><a href='?type=status&id=".$row['id']."&status=0'>Approved</a></span>";
							        }
							        								echo "<span class='badge badge-edit'><a href='manage_blogs.php?id=".$row['id']."'>Edit</a></span>&nbsp;";

								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";

							        }else{
							        	        if($row['status']=='0'){
								echo "<span class='badge badge-warning'style='margin-right:5px;'><a>Pending</a></span>";
							        }else{
								echo "<span class='badge badge-success'style='margin-right:5px;'><a>Approved</a></span>";
							        }
								echo "<span class='badge badge-edit'><a href='manage_blogs.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
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