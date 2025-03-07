<?php include('confige.php');?>
<!--</?php $games=$_GET['games']; ?>-->
<?php 	if($_REQUEST['blog']!=''){
   $games=$_REQUEST['blog'];
    }else{
    header("location:https://zettagame.com");
  } ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- required meta -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
      <!-- #favicon -->
      <link rel="shortcut icon" href="https://zettagame.com/assets/images/favicon.png" type="image/x-icon">
      <link rel="stylesheet" href="https://zettagame.com/assets/css/main.css">
      <meta name="google-site-verification" content="AKKInmlx0DYDhngp984Zxtb4uKnzXuujoJ0rNUTH4bg" />
      <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
      <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
      <!-- #title -->
      <?php           
          include('confige.php');
            $game_res4=mysqli_query($con,"select * from meta_data where page='home'");
            $game_arr4=array();
            while($row4=mysqli_fetch_assoc($game_res4)){
              $game_arr4[]=$row4;    
            }
             foreach($game_arr4 as $list){
                 echo htmlspecialchars_decode($list['data']);
            }?>
   </head>
   <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "zettagame",
  "url": "https://zettagame.com/",
  "potentialAction": {
    "@type": "SearchAction", 
    "target": "https://boardgamegeek.com/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
   <body>
       
      <div class="nftg-app a-cursor ">
            <?php include('header.php');?>
            <!-- ==== / header end ==== -->
            <!-- ==== main content start ==== -->
            <main class="nftg-content">
               <!-- ==== game details start ==== -->
               <section class="game-details">
                  <div class="container-fluid">
                     <div class="row vertical-column-gap">
                        <div class="col-12 col-xxl-7">
                           <div class="game-details__slider-wrapper">
                              <div class="game-details-slider swiper">
                                 <div class="swiper-wrapper">
                                      <?php 
                                        $sqls = "SELECT id,name FROM games WHERE name='$games'";
                                        $ress = mysqli_query($con, $sqls);
                                        $result = mysqli_fetch_assoc($ress);
                                        $games_id = $result['id'];
                                        $name_games = $result['name'];
                                    
                                        $gameimage = "SELECT * FROM games_images WHERE games_id='$games_id'";
                                        $resgameimage = mysqli_query($con, $gameimage);
                                        $i = 1;
                                        while ($rowimage = mysqli_fetch_assoc($resgameimage)) {
                                        ?>
                                    <div class="swiper-slide">
                                       <div class="game-details-slider__single">
                                          <img src="https://zettagame.com/images/games/<?php echo $rowimage['image']; ?>" alt="Image" style="border-radius: 5px;border: 3px solid #ae8a8a;width:100%;height:493px">
                                       </div>
                                    </div>
                                     <?php $i++; } ?>
                                 </div>
                              </div>
                           </div>
                           <div class="game-details-thumb-wrapper">
                              <div class="game-details-thumb swiper">
                                 <div class="swiper-wrapper">
                                 <?php 
                                    $sqls = "SELECT id,name FROM games WHERE name='$games'";
                                    $ress = mysqli_query($con, $sqls);
                                    $result = mysqli_fetch_assoc($ress);
                                    $games_id = $result['id'];
                                    $name_games = $result['name'];
                                
                                    $gameimage = "SELECT * FROM games_images WHERE games_id='$games_id'";
                                    $resgameimage = mysqli_query($con, $gameimage);
                                    $i = 1;
                                    while ($rowimage = mysqli_fetch_assoc($resgameimage)) {
                                    ?>
                                    <div class="swiper-slide">
                                       <div class="game-details-thumb__single">
                                          <img src="https://zettagame.com/images/games/<?php echo $rowimage['image']; ?>" alt="Image" style="border-radius: 5px;border: 3px solid #ae8a8a;">
                                       </div>
                                    </div>
                                     <?php $i++; } ?>
                                    
                                 </div>
                              </div>
                           </div>
                            <div class="game-details__inner">
                                  <div class="row">
                                        <div class="col-md-2 mobile_sets_image">
                                            <?php 
                                                $sqls = "SELECT id,name,image FROM games WHERE name='$games'";
                                                $ress = mysqli_query($con, $sqls);
                                                $result = mysqli_fetch_assoc($ress);
                                                $games_id = $result['id'];
                                                $name_games = $result['name'];
                                                 $img_games = $result['image'];
                                           ?>
                                            <img src="https://zettagame.com/images/games/<?php echo $img_games?>" alt="<?php echo $name_games?>"
                                                style="width:100%;height: 58px;border-radius: 4px;margin-top: 4px;">
                                        </div>
                                        <div class="col-md-1 mobile_sets_content">
                                            <?php 
                                                $sqls = "SELECT id,name,image FROM games WHERE name='$games'";
                                                $ress = mysqli_query($con, $sqls);
                                                $result = mysqli_fetch_assoc($ress);
                                                $games_id = $result['id'];
                                                $name_games = $result['name'];
                                                   ?>
                                            <p style="margin-top:20px;font-size: 18px;font-weight: 600;" class="text-center">
                                                <?php echo $capitalized = ucwords(str_replace("_", " ", $name_games));?>
                                            </p>
                                        </div>
                                        <div class="col-md-5"></div>
                                        <div class="col-sm-12 col-md-4">
                                            <?php 
                                            $sqls = "SELECT id,name,image FROM games WHERE name='$games'";
                                            $ress = mysqli_query($con, $sqls);
                                            $result = mysqli_fetch_assoc($ress);
                                            $games_id = $result['id'];
                                            $name_games = $result['name'];
                                                ?>
                                    
                                            <a href="https://zettagame.com/<?php echo $name_games; ?>" style="float: right;" class="mobile_sets">
                                                <button
                                                    class="cursor-pointer bg-primary text-primary-content hover:bg-[var(--primary-color-hover)] active:bg-[var(--primary-color-active)] shimmerFx absolute bottom-6 flex h-11 min-w-max -translate-y-full items-center justify-center gap-1 overflow-hidden rounded-md px-6 py-1 md:relative md:bottom-0 md:translate-y-0"
                                                    aria-label="Play Game Quiz" style="margin-top: 4px;padding: 22px 21px 30px 29px;border-radius: 5px;">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="30"
                                                        width="30" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm144.1 454.9L437.7 677.8a8.02 8.02 0 0 1-12.7-6.5V353.7a8 8 0 0 1 12.7-6.5L656.1 506a7.9 7.9 0 0 1 0 12.9z">
                                                        </path>
                                                    </svg> PLAY NOW</button>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                           <div class="game-details__inner mt-80">
                              <div class="game-details-nft-wrapper mt-60">
                                 <div class="game-details-about">
                                    <h1 class="fw-6 title-animation mt-8">About Game</h1>
                                    <div class="group mt-24">
                                      <?php
                                        $sqlss="select id,short_desc from games where name='$games'";
                                        $resss=mysqli_query($con,$sqlss);
                                        $results = mysqli_fetch_assoc($resss);
                                        $games_ids = $results['id'];
                                        $games_short_desc = $results['short_desc'];
                                        ?>
                                       <p class="mt-24"><?php echo  $games_short_desc;?></p>
                                    </div>
                                 </div>
                              </div>
                              <div class="game-details-nft-wrapper mt-60">
                                 <div class="row align-items-center vertical-column-gap">
                                    <div class="col-12 col-lg-6">
                                       <div class="text-center text-lg-start">
                                          <h4 class="fw-6 title-animation mt-8">Related Games</h4>
                                       </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <div class="text-center text-lg-end">
                                          <div class="btn-wrapper">
                                             <a href="https://zettagame.com/games" class="btn--secondary">View All</a>
                                             <svg viewBox="0 0 100 102" xmlns="www.w3.org/2000/svg.html"
                                                fill="none" preserveAspectRatio="none" class="shape">
                                                <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="game-nft-wrapper browse-game mt-60">
                                    <div class="game-details-game-slider swiper">
                                       <div class="swiper-wrapper">
                                           
                                           <?php 
                                      $sql="select * from games where status='1' order by games.id desc";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>
                                          <div class="swiper-slide">
                                             <div class="browse-game__single">
                                                <div class="thumb-wrapper">
                                                   <div class="thumb">
                                                      <img src="https://zettagame.com/images/games/<?php echo $row['image']?>"
                                                         alt="<?php echo $row['name'];?>" style="height:257px;width:257px">
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
                                          <?php $i++; } ?>
                                          
                                       </div>
                                    </div>
                                    <div class="slider-footer mt-60">
                                       <div class="slider-navigation">
                                          <button type="button" aria-label="prev slide" title="prev slide"
                                             class="prev-game slider-btn">
                                          <i class="ti ti-chevron-left"></i>
                                          </button>
                                          <button type="button" aria-label="next slide" title="next slide"
                                             class="next-game slider-btn">
                                          <i class="ti ti-chevron-right"></i>
                                          </button>
                                       </div>
                                       <div class="game-slider-progress pagination-two"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xxl-5">
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
                                                 alt="<?php echo $row['name']; ?>" style="height:210px;width:100%">
                                        </div>
                                        <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                            <i class="ti ti-arrow-up-right"></i>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="gm_title"><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
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
                  </div>
               </section>
               <!-- ==== / game details end ==== -->
              
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
           <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
        <?php include('footerurl.php');?>