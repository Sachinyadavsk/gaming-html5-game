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
            $game_res4=mysqli_query($con,"select * from meta_data where page='forget-password'");
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
   <div class="nftg-app-alt a-cursor sidebar-add">
      <!-- ==== preloader start ==== -->
      <div id="preloader">
         <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
               <div class="spinner"></div>
               <div class="txt-loading">
                  <span data-text-preloader="L" class="letters-loading">
                     L
                  </span>
                  <span data-text-preloader="O" class="letters-loading">
                     O
                  </span>
                  <span data-text-preloader="A" class="letters-loading">
                     A
                  </span>
                  <span data-text-preloader="D" class="letters-loading">
                     D
                  </span>
                  <span data-text-preloader="I" class="letters-loading">
                     I
                  </span>
                  <span data-text-preloader="N" class="letters-loading">
                     N
                  </span>
                  <span data-text-preloader="G" class="letters-loading">
                     G
                  </span>
               </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
         </div>
      </div>
      <!-- ==== / preloader end ==== -->
      <!-- ==== thumb start ==== -->
      <div class="nftg-thumb">
         <img src="https://zettagame.com/assets/images/error/error-thumb.png" alt="Page Not Found" class="parallax-image">
      </div>
      <!-- ==== / thumb end ==== -->
      <!-- ==== layout start ==== -->
      <div class="nftg-layout-two">
         <!-- ==== header start ==== -->
         <header class="header-two">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="navbar p-0">
                        <a href="https://zettagame.com/" aria-label="home page" title="logo" class="not-cursor">
                           <img src="https://zettagame.com/assets/images/logo-alt.png" alt="Image" style="width: 54px;height: 35px;">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- ==== / header end ==== -->
         <!-- ==== main content start ==== -->
         <main class="nftg-content-two">
            <!-- ==== authentication section start ==== -->
            <section class="authentication pt-120 pb-120 fade-wrapper">
               <div class="container-fluid">
                  <div class="row justify-content-center">
                     <div class="col-12">
                        <div class="authentication__wrapper text-center">
                           <div class="mb-55">
                              <h1 class="title-lg fw-8 stroked-text transform-none title-animation mt-8">Hello
                                 Gamer
                              </h1>
                              <p class="text-xl text-alter mt-12">Welcome Back, We Missed You.</p>
                           </div>
                           <div class="authentication__inner">
                               
                              <form action="https://zettagame.com/forget-password-submit" method="post">
                                 <div class="input-single">
                                    <label for="email">Your Email</label>
                                    <div class="ic-group">
                                       <input type="email" name="email" id="email" placeholder="Enter Email" required>
                                       <i class="ti ti-mail"></i>
                                    </div>
                                 </div>
                                 <div class="btn-wrapper mt-40">
                                    <button class="btn--secondary" aria-label="login" title="Forget Password">
                                       Forget Password </button>
                                 </div>
                              </form>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- ==== / authentication section end ==== -->
         </main>
         <!-- ==== / main content end ==== -->
      </div>
      <!-- ==== / layout end ==== -->

      <!-- ==== scroll to top start ==== -->
      <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
         <span></span>
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </button>
      <!-- ==== / scroll to top end ==== -->
   </div>
   <!-- ==== js dependencies start ==== -->
   <!-- jquery -->
   <script src="https://zettagame.com/assets/js/jquery-3.7.1.min.js"></script>
   <!-- bootstrap five js -->
   <script src="https://zettagame.com/assets/js/bootstrap.bundle.min.js"></script>
   <!-- nice select js -->
   <script src="https://zettagame.com/assets/js/jquery.nice-select.min.js"></script>
   <!-- magnific popup js -->
   <script src="https://zettagame.com/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- swiper slider js -->
   <script src="https://zettagame.com/assets/js/swiper-bundle.min.js"></script>
   <!-- viewport js -->
   <script src="https://zettagame.com/assets/js/viewport.jquery.js"></script>
   <!-- odometer js -->
   <script src="https://zettagame.com/assets/js/odometer.min.js"></script>
   <!-- vanilla tilt js -->
   <script src="https://zettagame.com/assets/js/vanilla-tilt.min.js"></script>
   <!-- matter js -->
   <script src="https://zettagame.com/assets/js/matter.min.js"></script>
   <!-- apex chart js -->
   <script src="https://zettagame.com/assets/js/apexcharts.min.js"></script>
   <!-- splittext js -->
   <script src="https://zettagame.com/assets/js/SplitText.min.js"></script>
   <!-- scrollto js -->
   <script src="https://zettagame.com/assets/js/ScrollToPlugin.min.js"></script>
   <!-- scrolltrigger js -->
   <script src="https://zettagame.com/assets/js/ScrollTrigger.min.js"></script>
   <!-- gsap js -->
   <script src="https://zettagame.com/assets/js/gsap.min.js"></script>
   <!-- lenis smooth scroll -->
   <script src="https://zettagame.com/assets/js/lenis.min.js"></script>
   <!-- ==== / js dependencies end ==== -->
   <!-- main js -->
   <script src="https://zettagame.com/assets/js/custom.js"></script>
</body>

</html>