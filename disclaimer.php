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
    $game_res4=mysqli_query($con,"select * from meta_data where page='disclaimer'");
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
                                 Disclaimer
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
                                      <h1>Disclaimer</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>Welcome to <a href="https://zettagame.com/" style="color:blue">Zettagame</a>By the usage of our internet site, you acknowledge and conform to the terms mentioned on this disclaimer. If you do no longer agree with any part of this disclaimer, please refrain from the use of our website.</p>
                                    <h3 class="fw-6">General Information</h3>
                                    <p>The content material supplied on Zettagame is for informational and leisure purposes handiest. While we attempt to make certain accuracy, we do no longer assure the completeness, reliability, or validity of any information on this web page. Your use of any content is solely at your very own chance.</p>
                                     <h3 class="fw-6 mt-2">No Professional Advice</h3>
                                     <p>The information in this internet site should not be taken into consideration professional, economic, felony, or technical advice. If you require specific recommendation, we suggest consulting a qualified expert inside the relevant field.</p>
                                     
                                     <h3 class="fw-6 mt-2">External Links Disclaimer</h3>
                                   <p>Our internet site may additionally include hyperlinks to 1/3-celebration web sites. We do not control or advocate the content of these websites and are not chargeable for their accuracy, reliability, or guidelines. Visiting outside hyperlinks is at your very own discretion.</p>
                                    
                                    <h3 class="fw-6 mt-2">Limitation of Liability</h3>
                                    <p>Under no circumstances shall Zettagame, its proprietors, affiliates, or employees be accountable for any direct, indirect, incidental, or consequential damages springing up out of your use of this internet site.</p>
                                     <h3 class="fw-6 mt-2">Copyright & Fair Use</h3>
                                     <p>All content material, inclusive of textual content, images, and multimedia, is the assets of Zettagame until otherwise said. Unauthorized use, replica, or distribution of our content material is against the law. If you consider any content violates copyright laws, please touch us for resolution.</p>
                                      <h3 class="fw-6 mt-2">Changes to This Disclaimer</h3>
                                      <p>We reserve the proper to replace or modify this disclaimer at any time without prior note. Continued use of this website after changes are published constitutes popularity of the revised terms.</p>
                                       <h3 class="fw-6">Contact Us</h3>
                                     <p>If you have got any questions on this disclaimer, please touch us at info@zettamobi.com.</p>
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