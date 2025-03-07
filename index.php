<?php include('confige.php');?>
<?php
session_start();
?>
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
      <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTVQF8VQ');</script>
    <!-- End Google Tag Manager -->
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
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3BKZXB6DSF"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-3BKZXB6DSF');
        </script>
        <script>
       // Function to check and request notification permission
            function requestNotificationPermission() {
                if (!("Notification" in window)) {
                    alert("This browser does not support desktop notifications.");
                    return;
                }
            
                Notification.requestPermission().then(permission => {
                    localStorage.setItem("notification_permission", permission); // Save response
                    
                    if (permission === "granted") {
                        console.log("User allowed notifications.");
                        sendNotification();
                    } else if (permission === "denied") {
                        console.log("User blocked notifications.");
                        alert("You have blocked notifications. To enable them, change settings in your browser.");
                    }
                });
            }
            
            // Function to fetch meta description
            function getMetaDescription() {
                const metaTag = document.querySelector('meta[name="description"]');
                return metaTag ? metaTag.getAttribute("content") : "No description available";
            }
            
            // Function to show notification
            function sendNotification() {
                let title = document.title; // Get the page title
                let description = getMetaDescription(); // Get the meta description
                let url = window.location.href; // Get the page URL
            
                if (Notification.permission === "granted") {
                    new Notification(title, {
                        body: description,
                        icon: "https://zettagame.com/assets/images/favicon.png" // Update with your logo URL
                    });
            
                    // Send data to the server
                    saveNotificationToDB(title, description, url);
                }
            }
            
            // Function to store the notification in the database via AJAX
            function saveNotificationToDB(title, description, url) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "save_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                let data = `title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&url=${encodeURIComponent(url)}`;
                xhr.send(data);
            }
            
            // Check notification permission on page load
            document.addEventListener("DOMContentLoaded", function () {
                const permission = localStorage.getItem("notification_permission");
            
                if (!permission || permission === "default") {
                    requestNotificationPermission(); // Ask only if no decision has been made
                }
            });

    </script>
   <body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTVQF8VQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <div class="nftg-app a-cursor ">
            <?php include('header.php');?>
            <!-- ==== / header end ==== -->
            <!-- ==== main content start ==== -->
            <main class="nftg-content nftg-content-home">
               <!-- ==== banner section start ==== -->
               <!--<section class="banner">-->
               <!--   <div class="container-fluid">-->
               <!--      <div class="row vertical-column-gap">-->
               <!--         <div class="col-12 col-lg-12 col-xxl-12">-->
               <!--             <p class="text-center" style="font-size:25px">Google Ads </p>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</section>-->
               <!-- ==== / banner section end ==== -->

               <!-- ==== feature games section start ==== -->
               <section class="feature pt-120">
                  <div class="container-fluid">
                     <div class="row align-items-center vertical-column-gap">
                        <div class="col-12 col-lg-6">
                           <div class="text-center text-lg-start">
                              <h1 class="fw-6 title-animation mt-8">Featured Games</h1>
                           </div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="text-center text-lg-end">
                              <div class="btn-wrapper">
                                 <a href="https://zettagame.com/games" class="btn--secondary">View All</a>
                                 <svg viewBox="0 0 100 102" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    preserveAspectRatio="none" class="shape">
                                    <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="feature-wrapper mt-60">
                              <div class="feature-slider-wrapper">
                                 <div class="feature-slider swiper">
                                    <div class="swiper-wrapper">
                                    
                                    
                                     <?php 
                                      $sql="select * from games order by games.id desc";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>

                                       <div class="swiper-slide">
                                          <div class="feature-slider__single">
                                             <div class="thumb">
                                                <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                                <img src="https://zettagame.com/images/games/<?php echo $row['image']?>"
                                                   alt="<?php echo $row['name'];?>" style="height:250px;width:320px">
                                                </a>
                                             </div>
                                             
                                          </div>
                                          <p class="game_titles"><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>"><?php echo $capitalized = ucwords(str_replace("_", " ", $row['name']));?></a></p>
                                       </div>

                                       <?php $i++; } ?>
                                    </div>
                                 </div>
                                 <div class="slider-footer mt-60">
                                    <div class="slider-navigation">
                                       <button type="button" aria-label="prev slide" title="prev slide"
                                          class="prev-feature slider-btn">
                                       <i class="ti ti-chevron-left"></i>
                                       </button>
                                       <button type="button" aria-label="next slide" title="next slide"
                                          class="next-feature slider-btn">
                                       <i class="ti ti-chevron-right"></i>
                                       </button>
                                    </div>
                                    <div class="feature-slider-progress pagination-two"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / feature games section end ==== -->
               <!-- ==== trending games section start ==== -->
               <section class="trending pt-120 fade-wrapper">
                  <div class="container-fluid">
                     <div class="row align-items-center vertical-column-gap">
                        <div class="col-12 col-lg-6">
                           <div class="text-center text-lg-start">
                              <h2 class="fw-6 title-animation mt-8">Trending Games <img src="https://zettagame.com/assets/images/fire.png"
                                 alt="Image"> </h2>
                           </div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="text-center text-lg-end">
                              <div class="btn-wrapper">
                                 <a href="https://zettagame.com/games" class="btn--secondary">View All</a>
                                 <svg viewBox="0 0 100 102" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    preserveAspectRatio="none" class="shape">
                                    <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="trending__wrapper mt-60 ">
                                  <?php 
                                      $sql="select * from games order by games.id";
                                      $res=mysqli_query($con,$sql);
                                      $i=1;
							                 while($row=mysqli_fetch_assoc($res)){?>
                                    <div class="trending__single-wrapper appear-down">
                                       <div class="trending__single van-tilt">
                                          <div class="thumb ">
                                             <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>">
                                             <img src="https://zettagame.com/images/games/<?php echo $row['image']?>"
                                                   alt="<?php echo $row['name'];?>" style="height: 200px;width:100%;">
                                             </a>
                                          </div>
                                          <p class="game_titles"><a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>"><?php echo $capitalized = ucwords(str_replace("_", " ", $row['name']));?></a></p>
                                       </div>
                                    </div>
                                   <?php $i++; } ?>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-12">
                                 <h3 style="font-weight: 600;font-size: 36px;">Best Hentai Games: Top Picks for Anime Fans</h3>
                                 <p>The world of <b>best hentai games</b> offers immersive experiences with captivating storylines, stunning anime artwork, and interactive gameplay. From visual novels to adventure-based titles, these games cater to a wide range of preferences. Popular choices include the <b>Rapelay game</b>, known for its controversial themes, and the <b>Omegle game</b>, which brings an interactive twist inspired by anonymous chat experiences. Fantasy lovers might enjoy <b>The Wishing Game</b>, while those intrigued by internet culture can explore <b>Rule 34 games</b>. Meanwhile, casual gamers can also find entertainment in titles like <b>Buzzr games, Looney Tunes Blocks Game</b>, and <b>Children’s Card Games</b>. Psychological game lovers may appreciate <b>Mind Games Cologne</b>, and for those seeking unique physics-based challenges, <b>Trampoline Games</b> provide an engaging alternative. Whether you're a seasoned player or new to the genre, exploring the <b> <a href="https://zettagame.com/games/physicsplayground"> best hentai games</a></b> offers a thrilling experience. Always play responsibly and choose games that suit your taste! 🎮
                                  </p>
                        </div>
                     </div>
                  </div>
               </section>
               
               <!-- ==== / cta section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
           <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <!-- ==== / layout end ==== -->
         <?php include('footerurl.php');?>