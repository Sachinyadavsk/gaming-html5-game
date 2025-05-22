<?php
require('top.inc.php');


$title = '';
$des = '';
$logdes = '';
$pages = '';
$msg = '';


if (isset($_GET['id']) && $_GET['id'] != '') {
    $image_required = '';
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "SELECT * FROM pageslay WHERE id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $des = $row['des'];
        $logdes = $row['logdes'];
        $pages = $row['pages'];
    } else {
        header('location:pages.php');
        die();
    }
}

if (isset($_POST['submit'])) {
    $title = get_safe_value($con, $_POST['title']);
    $des = get_safe_value($con, $_POST['des']);
    $logdes = get_safe_value($con, $_POST['logdes']);
    $pages = get_safe_value($con, $_POST['pages']);

    $res = mysqli_query($con, "SELECT * FROM pageslay WHERE title='$tit'");
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
            if (isset($_GET['id']) && $_GET['id'] != '') {
                 $update_sql = "UPDATE pageslay SET title='$title', des='$des', logdes='$logdes', pages='$pages', status='0' WHERE id='$id'";
                mysqli_query($con, $update_sql);
            } else {
                mysqli_query($con, "INSERT INTO pageslay (title, des, logdes, pages, status) VALUES ('$title', '$des', '$logdes', '$pages', '0')");
            }
            header('location:pages.php');
            die();
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
                                        <label for="categories" class="form-control-label">Page</label>
                                        <select class="form-control" name="pages">
                                            <option value="<?php echo $pages; ?>">
                                                <?php echo $pages; ?>
                                            </option>
                                           
                                            <option value="home">Home</option>
                                            <option value="puzzle games">Puzzle Games</option>
                                            <option value="fun games">Fun Games</option>
                                            <option value="board games">Board Games</option>
                                            <option value="sports games">Sports Games</option>
                                            <option value="arcade games">Arcade Games</option>
                                            <option value="shooter games">Shooter Games</option>
                                            <option value="card games">Card Games</option>
                                            <option value="racing games">Racing Games</option>
                                         </select>
                                    </div>

                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Title</label>
                                        <input type="text" name="title" value="<?php echo $title;?>" class="form-control"
                                            required>
                                    </div>
                                    
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Short Content</label>
                                        <textarea type="text" name="des" id="desc" class="form-control des"
                                            required><?php echo $des;?></textarea>
                                    </div>
                                    
                                    <div class="col-lg-10">
                                        <label for="categories" class=" form-control-label">Long Content</label>
                                        <textarea type="text" name="logdes" id="logdes" class="form-control logdes"
                                            required><?php echo $logdes;?></textarea>
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


<script>
    CKEDITOR.replace('desc', {
        // Custom configuration options
        toolbar: 'Basic'
    });
    
     CKEDITOR.replace('logdes', {
        // Custom configuration options
        toolbar: 'Basic'
    });
    
    
</script>

<?php
require('footer.inc.php');
?>