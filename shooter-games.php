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
    $game_res4=mysqli_query($con,"select * from meta_data where page='shooter games'");
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
      <main class="nftg-content nftg-content-home">
         <!-- ==== banner section start ==== -->
         <section class="banner">
            <div class="container-fluid">
               <div class="row vertical-column-gap">
                  <div class="col-12 col-lg-12 col-xxl-12">
                     <!--<p class="text-center" style="font-size:30px">Google Ads </p>-->
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / banner section end ==== -->

         <!-- ==== trending games section start ==== -->
         <section class="trending pt-120 fade-wrapper">
            <div class="container-fluid">
               <div class="row align-items-center vertical-column-gap">
                  <div class="col-12 col-lg-12">
                     <div class="text-center text-lg-start">
                        <h1 class="fw-6 title-animation mt-8">Shooter Games <img src="https://zettagame.com/assets/images/fire.png"
                              alt="Image"> </h1>
                        <p>Our collection of free online shooter games</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="trending__wrapper mt-60 ">
                        <?php 
                                      $sql="select * from games where type='Shooter_game' and status='1' order by games.id";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>
                        <div class="trending__single-wrapper appear-down">
                           <div class="trending__single van-tilt">
                              <div class="thumb ">
                                 <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                    <img src="https://zettagame.com/images/games/<?php echo $row['image']?>" alt="<?php echo $row['name'];?>"
                                       style="height: 200px;width: 290px;">
                                 </a>
                              </div>
                              <p class="game_titles"><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>"><?php echo $capitalized = ucwords(str_replace("_", " ", $row['name']));?></a></p>
                           </div>
                        </div>
                        <?php $i++; } ?>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / trending games section end ==== -->
         <section class="secure pt-120 fade-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-xl-12 fade-top">
                     <h4 class="header_pintrs_fours">What Can I Say Besides Shooting Games? Exploring Fun Alternatives</h4>
                     <p class="content_layout_text">If you're wondering, <b><a href="https://zettagame.com/card-games">what can I say besides shooting games,</a></b> there are plenty of exciting alternatives to explore. While <b>gun games unblocked and 3 person shooter games</b> are popular, you can try other action-packed genres that offer the same thrill. Games like <b>racing simulators, strategy-based war games, and survival adventures</b> provide intense gameplay without relying solely on shooting mechanics. If you still enjoy aiming challenges, you can explore <b>shooting game</b> targets in archery or sports-based target games. For Chromebook users, <b>play online shooter for Chromebooks</b> offers browser-friendly action games, including futuristic combat and multiplayer battle arenas. Puzzle-based RPGs, open-world exploration, and battle royale survival games can also provide engaging experiences with strategic depth. Whether you're looking for adrenaline-pumping action or immersive storytelling, there are countless gaming options beyond traditional shooters. Explore different genres and find the perfect game that keeps you entertained! 🎮
                     </p>
                     <!--<h4 class="text-center">Google Ads</h4>-->
                  </div>
               </div>
            </div>
         </section>
         <section class="secure pt-120 fade-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-xl-12 fade-top">
                     <h5 class="header_pintrs_fifth">Collections of Shooter Games on Games</h5>
                     <?php 
                                      $sqlctn="select * from games where type='Shooter_game' and status='1' order by games.id";
                                      $resctn=mysqli_query($con,$sqlctn);
                                      $i=1;
							                 while($rowctn=mysqli_fetch_assoc($resctn)){?>
                     <h6 class="header_pintrs_six">
                        <?php echo ucfirst($rowctn['name']);?> <img src="https://zettagame.com/images/games/<?php echo $rowctn['image']?>"
                           alt="<?php echo $rowctn['name'];?>" style="height: 18px;width: 29px;"
                           title="<?php echo $rowctn['name'];?>">
                     </h6>
                     <p class="content_layout_text">
                        <?php echo $rowctn['short_desc'];?>
                     </p>

                     <?php $i++; } ?>
                  </div>
               </div>
            </div>
         </section>

      </main>
      <!-- ==== / main content end ==== -->
      <!-- ==== footer start ==== -->
      <?php include('footer.php');?>
      <!-- ==== / footer end ==== -->
   </div>
   <!-- ==== / layout end ==== -->
   <?php include('footerurl.php');?>