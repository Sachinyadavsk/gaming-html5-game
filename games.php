<!DOCTYPE html>
<html lang="en">
<head>
<!-- required meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- #favicon -->
<link rel="shortcut icon" href="https://zettagame.com/assets/images/favicon.png" type="image/x-icon">
<meta name="author" content="https://zettagame.com/" />
  <?php           
  include('confige.php');
    $game_res4=mysqli_query($con,"select * from meta_data where page='games'");
    $game_arr4=array();
    while($row4=mysqli_fetch_assoc($game_res4)){
      $game_arr4[]=$row4;    
    }
     foreach($game_arr4 as $list){
         echo htmlspecialchars_decode($list['data']);
    }?>
<?php include('headerurl.php');?>
   <body>
      <div class="nftg-app a-cursor ">
         <?php include('header.php');?>
            <!-- ==== / header end ==== -->
            <!-- ==== main content start ==== -->
            <main class="nftg-content">
               <!-- ==== breadcrumb start ==== -->
               <div class="breadcrumb-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="https://zettagame.com/home">Home</a>
                                 </li>
                                 <li class="breadcrumb-item active" aria-current="page">
                                    Explore Games
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ==== / breadcrumb end ==== -->
               <!-- ==== game slider section start ==== -->
               <section class="pt-120 game-slider-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <div class="ts-header text-center mb-60">
                              <h2 class="title-animation title-lg stroked-text fw-8 transform-none mt-8">
                                 Hottest Games
                              </h2>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="game-slider-inner">
                              <div class="game-slider swiper">
                                 <div class="swiper-wrapper">
                                 <?php 
                                      $sql="select * from games where status='1' order by games.id desc limit 7";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>
                                       <div class="swiper-slide">
                                          <div class="game-slider-single">
                                             <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                             <img src="https://zettagame.com/images/games/<?php echo $row['image']?>"
                                             alt="<?php echo $row['name'];?>" style="height:340px;">
                                             </a>
                                          </div>
                                          <p class="game_titles text-center"><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>"><?php echo $capitalized = ucwords(str_replace("_", " ", $row['name']));?></a></p>
                                       </div>
                                     <?php $i++; } ?>
                                 </div>
                              </div>
                              <div class="cta mt-60">
                                 <div class="game-slider-pagination text-center">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== game slider section start ==== -->
               <!-- ==== browse game section start ==== -->
               <section class="browse-game pt-120 pb-120">
                  <div class="container-fluid">
                     <div class="row vertical-column-gap-lg">
                        <div class="col-12 col-xl-9">
                           <div class="browse-game__content">
                              <div class="browse-game__header mb-60">
                                 <div class="game-heading">
                                    <h3 class="fw-6">Browse Games</h3>
                                 </div>
                              </div>
                              <div class="row vertical-column-gap-md">
                              <?php
// Set the number of records per page
$records_per_page = 6;

// Get the current page number from the URL (default to 1 if not set)
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset for the query
$offset = ($page - 1) * $records_per_page;

// Fetch the total number of records
$total_records_query = "SELECT COUNT(*) as total FROM games WHERE status='1'";
$total_records_result = mysqli_query($con, $total_records_query);
$total_records_row = mysqli_fetch_assoc($total_records_result);
$total_records = $total_records_row['total'];

// Calculate the total number of pages
$total_pages = ceil($total_records / $records_per_page);

// Fetch the records for the current page
$sql = "SELECT * FROM games WHERE status='1' ORDER BY id ASC LIMIT $offset, $records_per_page";
$res = mysqli_query($con, $sql);
?>

<div class="row">
    <?php while ($row = mysqli_fetch_assoc($res)) { ?>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="browse-game__single">
                <div class="thumb-wrapper">
                    <div class="thumb">
                        <img src="https://zettagame.com/images/games/<?php echo $row['image']; ?>"
                             alt="<?php echo $row['name']; ?>" style="height:250px;">
                    </div>
                    <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                        <i class="ti ti-arrow-up-right"></i>
                    </a>
                </div>
                <div class="content">
                    <h5><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                    <?php echo $capitalized = ucwords(str_replace("_", " ", $row['name']));?>
                    </a></h5>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<!-- Pagination -->
<nav>
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $total_pages): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-3">
                           <div class="browse-game__sidebar">
                              <!--<div class="browse-sidebar__widget-filter">-->
                              <!--   <h4>Google Ads</h4>-->
                              <!--</div>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / browse game section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <?php include('footerurl.php');?>