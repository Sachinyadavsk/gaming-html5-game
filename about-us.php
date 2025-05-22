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
    $game_res4=mysqli_query($con,"select * from meta_data where page='about us'");
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
                                 About Us
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ==== / breadcrumb end ==== -->
               <!-- ==== blog section start ==== -->
               <section class="pt-120 pb-120 blog-area fade-wrapper">
                  <div class="container-fluid">
                     <div class="row vertical-column-gap-lg">
                        <div class="col-12 col-xl-12">
                           <div class="blog-area__content">
                              <div class="blog-details">
                                    <div class="text-center mb-50">
                                         <h1>About Us</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>At Zettagame, we're obsessed with handing during the last gaming session. Whether you're a casual player or a hardcore gamer, we try to create a dynamic platform that caters to all gaming fanatics.</p>
                                    <h3 class="fw-6">Who We Are</h3>
                                    <p>Zettagame is a hub for gamers, builders, and content material creators who have a love for immersive gameplay, contemporary generation, and a thriving gaming community. Our purpose is to redefine the gaming panorama with the resource of providing enticing content, the current game releases, professional evaluations, and interactive skills that preserve you in advance within the gaming global.</p>
                                    <h3 class="fw-6">What We Offer</h3>
                                    <ul>
                                        <li><b>(1) Latest Game News & Reviews:</b>  – Stay up to date with in-depth analysis and honest critiques of trending video video games.</li>
                                        <li><b>(2) Gaming Community:</b>  – Connect with like-minded gamers, proportion research, and take part in discussions.</li>
                                        <li><b>(3) Exclusive Content:</b> – Explore recreation guides, tutorials, and seasoned pointers to degree up your capabilities.</li>
                                        <li><b>(4) Innovative Gaming Solutions:</b> – Discover new equipment, mods, and improvements that take your gaming experience to the subsequent diploma.</li>
                                    </ul>
                                    
                                    <h3 class="fw-6">Our Vision</h3>
                                    <p>We take delivery of as proper with gaming is greater than virtually enjoyment—it’s a way of life. Our challenge is to create a location wherein gamers can research, engage, and develop collectively. With a sturdy determination to superb and innovation, we intention to be the bypass-to platform for every gaming enthusiast.</p>
                                    <h3 class="fw-6">Join the Zettagame Community</h3>
                                    <p>Are you geared up to elevate your gaming journey? <a href="https://zettagame.com/contact-us" style="color:blue">Be a part of the Zettagame</a>revel in and immerse yourself in a global of limitless possibilities.</p>
                                 </div>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / blog section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <?php include('footerurl.php');?>