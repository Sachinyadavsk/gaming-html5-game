<?php
require('top.inc.php');


$name='';
$image='';
$car_name='';
$msg='';
$photo='';
$image_required='required';
if(isset($_POST['submit'])){
	//prx($_POST);
	$name=get_safe_value($con,$_POST['name']);
	
	$photo=$_FILES['photo']['name'];
	$res=mysqli_query($con,"select games_images.* from games_images where games_images.image='$photo' and games_id='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Image already exist";
			}
		}else{
			$msg="Image already exist";
		}
	}
	
	
	if($msg==''){

		if($_FILES['photo']['name'] != ''){
			$ext = explode('.', $_FILES['photo']['name']);
			$ext_check = strtolower(end($ext));
			$valid_ext = array('png', 'jpg', 'jpeg');
		
			if(in_array($ext_check, $valid_ext)){
				$photo = 'game_' . date('Ymd_His') . '.' . $ext_check;
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/games/' . $photo);
				mysqli_query($con, "INSERT INTO games_images(games_id, image) VALUES('$name', '$photo')");
				$id = mysqli_insert_id($con);
				redirect('games_images.php');
			} else {
				echo "Invalid file type. Only PNG, JPG, and JPEG are allowed.";
			}
		}
		
		/*Product Multiple Images End*/
		/*Product Attributes End*/
		
		
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Manage Games Images</strong><small></small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<div class="row">
									  <div class="col-lg-6">
										<label for="categories" class=" form-control-label">Games</label>
										<select class="form-control" name="name" id="categories_id" onclick="get_sub_cat()"required>
                                        <option value="">--Select--</option>
										<?php                                                                                                               
								
												$cat_res=mysqli_query($con,"select * from games group by id desc");
												$cat_arr=array();
												while($row=mysqli_fetch_assoc($cat_res)){
												$cat_arr[]=$row;    
												}
												foreach($cat_arr as $list){
												$games_id=$list['id'];
												?>
														<option value="<?php echo $games_id;?>"><?php echo $list['name'];?></option>
													<?php }?>
										</select>
									  </div>
									  <div class="col-lg-6">
										<label for="categories" class=" form-control-label">Image</label>
                                        <input type="file" name="photo" value="<?php echo $image ?>" class="form-control" required>
									  </div>
									</div>
								</div>	
							
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info float-right">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         
<?php
require('footer.inc.php');
?>
<script>
<?php
if(isset($_GET['id'])){
?>
get_sub_cat('<?php echo $sub_categories_id?>');
<?php } ?>
</script>