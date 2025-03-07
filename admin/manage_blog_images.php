<?php
require('top.inc.php');

// Function to compress images
function compress_image($source, $destination, $quality) {
    $check = getimagesize($source);
    if ($check !== false) {
        $imageFileType = strtolower(pathinfo($destination, PATHINFO_EXTENSION));

        // Compress JPEG images
        if ($imageFileType == 'jpg' || $imageFileType == 'jpeg') {
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
        }
        // Compress PNG images (preserve transparency)
        elseif ($imageFileType == 'png') {
            $image = imagecreatefrompng($source);
            imagepng($image, $destination, 9);  // Compression level from 0 (no compression) to 9 (maximum compression)
        }

        // Free memory
        imagedestroy($image);
    } else {
        return false;
    }
    return true;
}

$pic = '';

if (isset($_POST['submit'])) {
    // $pic = get_safe_value($con, $_POST['pic']);
    if ($_FILES['pic']['name'] != '') {
        $photo = $_FILES['pic']['name'];
        $ext = explode('.', $_FILES['pic']['name']);
        $ext_check = strtolower(end($ext));
        $valid_ext = array('png', 'jpg', 'jpeg');
        $photo = rand(111111, 999999) . $photo;
        if (in_array($ext_check, $valid_ext)) {
            $target_dir = '../images/blog/';
            $target_file = $target_dir . $photo;

            // Compress the image before saving
            if (compress_image($_FILES['pic']['tmp_name'], $target_file, 30)) {
                // After compression, insert into the database
                mysqli_query($con, "INSERT INTO blog_images(image) VALUES('$photo')");
                redirect('blogs.php');
            } else {
                echo "Image compression failed.";
            }
        } else {
            echo "Invalid image format. Only JPG, JPEG, and PNG are allowed.";
        }
    }
}
?>

<script src="https://cdn.ckeditor.com/4.17.0/standard/ckeditor.js"></script>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Images</strong><small></small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<div class="row">
								      <div class="col-lg-10">
                                            <label for="categories" class=" form-control-label">Image</label>
                                            <input type="file" name="pic" class="form-control" required>
                                            <p>*Image dimensions should be 1000 x 500 pixels for better view</p>
									  </div>
                                      <div class="col-lg-10">
                                        <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info float-right">
                                           <span id="payment-button-amount">Submit</span>
                                        </button>
                                      </div>
							  
							</div>
                                 </div>
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
