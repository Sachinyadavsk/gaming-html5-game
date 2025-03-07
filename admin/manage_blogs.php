<?php
require('top.inc.php');

$dat = '';
$tit = '';
$des = '';
$pic = '';
$url = '';
$added_by = '';
$keywords = '';
$descriptions = '';
$msg = '';
$image_required = 'required';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM blogs WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $dat = $row['datee'];
        $tit = $row['title'];
        $keywords = $row['keywords'];
        $descriptions = $row['descriptions'];
        $des = $row['description'];
        $pic = $row['image1'];
        $url = $row['url'];
        $added_by = $row['added_by'];
    } else {
        header('location:blogs.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $dat = get_safe_value($con, $_POST['dat']);
    $tit = get_safe_value($con, $_POST['tit']);
    $pic = get_safe_value($con, $_POST['pic']);
    $des = get_safe_value($con, $_POST['des']);
    $keywords = get_safe_value($con, $_POST['keywords']);
    $descriptions = get_safe_value($con, $_POST['descriptions']);
    $url = get_safe_value($con, $_POST['url']);
    $added_by = get_safe_value($con, $_POST['added_by']);

    $res = mysqli_query($con, "SELECT * FROM blogs WHERE title='$tit'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $getData = mysqli_fetch_assoc($res);
            if ($id == $getData['id']) {
                // Allowed to proceed for update
            } else {
                $msg = "Game already exists";
            }
        } else {
            $msg = "Game already exists";
        }
    }

    if ($msg == '') {
        if (isset($_FILES['pic']['name']) && $_FILES['pic']['name'] != '') {
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            $file_name = $_FILES['pic']['name'];
            $file_tmp = $_FILES['pic']['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (in_array($file_ext, $allowed_types)) {
                $new_file_name = time() . '_' . $file_name;
                $file_path = '../images/blog/' . $new_file_name;
                move_uploaded_file($file_tmp, $file_path);
                $image = $new_file_name;
            } else {
                $msg = "Invalid file format. Only JPG, JPEG, PNG, and GIF are allowed.";
            }
        }

        if ($msg == '') {
            if (isset($_GET['id']) && $_GET['id'] != '') {
                if ($image != '') {
                    $update_sql = "UPDATE blogs SET datee='$dat', title='$tit', image1='$image', description='$des', keywords='$keywords', descriptions='$descriptions', url='$url', added_by='$added_by', status='0' WHERE id='$id'";
                } else {
                    $update_sql = "UPDATE blogs SET datee='$dat', title='$tit', description='$des', status='0' WHERE id='$id'";
                }
                mysqli_query($con, $update_sql);
            } else {
                mysqli_query($con, "INSERT INTO blogs (datee, title, image1, description, keywords, descriptions, url, added_by, status) VALUES ('$dat', '$tit', '$image', '$des','$keywords', '$descriptions', '$url', '$added_by', '0')");
            }
            header('location:blogs.php');
            die();
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
                    <div class="card-header"><strong>Manage Blog</strong><small></small></div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <div class="row">

                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Date</label>
                                        <input type="date" name="dat" value="<?php echo $dat;?>" class="form-control"
                                            required>
                                    </div>

                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Title</label>
                                        <input type="text" name="tit" value="<?php echo $tit;?>" class="form-control"
                                            required>
                                    </div>
                                    <?php if($pic!=''){?>
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Image</label>
                                        <input type="file" name="pic" value="<?php echo $pic;?>" class="form-control">
                                        <p>*Image dimensions should be 1000 x 500 pixels for better view</p>
                                    </div>

                                    <?php }else{?>

                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Image</label>
                                        <input type="file" name="pic" class="form-control" required>
                                        <p>*Image dimensions should be 1000 x 500 pixels for better view</p>
                                    </div>
                                    <?php }?>
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Blog</label>
                                        <textarea type="text" name="des" id="desc" class="form-control des"
                                            required><?php echo $des;?></textarea>
                                    </div>

                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Meta Keywords</label>
                                        <input type="text" name="keywords" value="<?php echo $keywords;?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Meta description</label>
                                        <input type="text" name="descriptions" value="<?php echo $descriptions;?>"
                                            class="form-control">
                                    </div>
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Url</label>
                                        <input type="text" name="url" value="<?php echo $url;?>" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Added By</label>
                                        <input type="text" name="added_by" value="<?php echo $added_by;?>"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-lg-10">
                                        <button id="payment-button" name="submit" type="submit"
                                            class="btn btn-lg btn-info float-right mt-3">
                                            <span id="payment-button-amount">Submit</span>
                                        </button>
                                    </div>

                                    <div class="field_error">
                                        <?php echo $msg?>
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
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">More Blog Images</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th width="70%">Image</th>
                                        <th width="26%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    $sql="select * from blog_images order by blog_images.id desc";
                                    $res=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_assoc($res)){?>
                                    <tr>
                                        <td class="serial">
                                            <?php echo $i?>
                                        </td>
                                        <td><img src="<?php echo '../images/blog/'.$row['image1']?>" alt="" width="100%">
                                            <span style="text-transform:none" id="textToCopy<?php echo $i;?>">
                                                <?php echo 'https://drive360.in/images/blog/'.$row['image']?>
                                            </span>
                                        </td>
                                        </td>
                                        <td>

                                            <?php
							        		echo "<span class='badge badge-edit'><a href='javascript:void(0)' onclick='copyText(".$i.")'>Copy Link</a></span>&nbsp;";
   
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
<script>
    function copyText(index) {
        var text = document.getElementById("textToCopy" + index);
        var range = document.createRange();
        range.selectNode(text);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        alert("Text copied: " + text.innerText);
    }
</script>
<script>
    CKEDITOR.replace('desc', {
        // Custom configuration options
        toolbar: 'Basic'
    });
</script>

<?php
require('footer.inc.php');
?>