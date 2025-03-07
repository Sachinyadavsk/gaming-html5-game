
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
    $game_res4=mysqli_query($con,"select * from meta_data where page='puzzle games'");
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
                        <h1 class="fw-6 title-animation mt-8">Puzzle Games <img src="https://zettagame.com/assets/images/fire.png"
                              alt="Image"> </h1>
                        <p>Our collection of free online puzzle games</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="trending__wrapper mt-60 ">
                        <?php 
                                      $sql="select * from games where type='Puzzle_game' and status='1' order by games.id";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>
                        <div class="trending__single-wrapper appear-down">
                           <div class="trending__single van-tilt">
                              <div class="thumb ">
                                 <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                    <img src="https://zettagame.com/images/games/<?php echo $row['image']?>" alt="<?php echo $row['name'];?>"
                                       style="height: 200px;width: 290px;" title="<?php echo $row['name'];?>">
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
         <!-- ==== secure section start ==== -->
         <section class="secure pt-120 fade-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-xl-12 fade-top">
                     <h4 class="header_pintrs_fours">Toy Puzzle Game: Fun and Engaging Brain Challenges</h4>
                     <p class="content_layout_text">A <b><a href="https://zettagame.com/board-games">toy puzzle game</a></b> is a fantastic way to enhance problem-solving skills while having fun. These games come in various forms, from classic jigsaw puzzles to modern interactive challenges. Whether you're a fan of <b>planet puzzles</b> featuring stunning celestial designs or prefer <b>puzzle board games</b> that test strategic thinking, there’s a game for everyone. Popular options include the <b>Game of Thrones puzzle</b>, perfect for fans of the epic series, and <b>metal puzzle games</b>, which offer intricate designs that challenge even the most skilled players. To preserve your puzzles, using a <b>puzzle saver</b> ensures long-lasting enjoyment. These games are great for kids and adults alike, improving cognitive skills and providing hours of entertainment. Whether you enjoy solo challenges or multiplayer fun, a <b>toy puzzle game</b> is a perfect choice for all ages. Explore different themes and difficulty levels to find the one that suits you best! 🧩</p>
                     <!--<h4 class="text-center">Google Ads</h4>-->
                  </div>
               </div>
            </div>
         </section>
         <section class="secure pt-120 fade-wrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-xl-12 fade-top">
                     <h5 class="header_pintrs_fifth">Top Puzzle Games Online For Free On Games</h5>
                     <?php 
                                      $sqlctn="select * from games where type='Puzzle_game' and status='1' order by games.id";
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
         <!-- ==== / secure section end ==== -->
      </main>
      <!-- ==== / main content end ==== -->
      <!-- ==== footer start ==== -->
      <?php include('footer.php');?>
      <!-- ==== / footer end ==== -->
   </div>
   <!-- ==== / layout end ==== -->
   <?php include('footerurl.php');?>