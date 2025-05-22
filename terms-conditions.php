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
    $game_res4=mysqli_query($con,"select * from meta_data where page='terms conditions'");
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
                                 Terms & Conditions
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
                                      <h1>Terms & Conditions</h1>
                                   </div>
                                 <div class="details__content">
                                    <p>Welcome to Zettagame <a href="https://zettagame.com/about-us" style="color:blue"> By gaining access to and the use of our website</a>offerings, and merchandise, you agree to comply with and be certain by way of the following Terms & Conditions. Please read them cautiously before intending.
                                    </p>
                                    <h3 class="fw-6">1. Acceptance of Terms</h3>
                                    <p>By getting access to Zettagame, you renowned that you have read, understood, and agreed to those terms. If you do now not accept as true with any a part of these phrases, please do now not use our services.</p>
                                     <h3 class="fw-6 mt-2">2. Eligibility</h3>
                                     <p>You must be as a minimum 18 years antique to use our services. By the usage of Zettagame, you confirm that you meet this requirement.</p>
                                     
                                     <h3 class="fw-6 mt-2">3. User Accounts</h3>
                                     <ul>
                                        <li>(1) You may be required to create an account to get right of entry to positive features.</li>
                                        <li>(2) You are responsible for keeping the confidentiality of your account info.</li>
                                        <li>(3) Zettagame isn't always accountable for any unauthorized access in your account.</li>
                                    </ul>
                                    
                                     <h3 class="fw-6 mt-2">4. Use of Services</h3>
                                    <ul>
                                        <li>(1) You agree to apply Zettagame in a lawful way.</li>
                                        <li>(2) You shall not have interaction in any pastime which could disrupt or damage our platform.</li>
                                        <li>(3) Any fraudulent, abusive, or illegal hobby may result in termination of your account.</li>
                                    </ul>
                                    
                                    <h3 class="fw-6 mt-2">5. Intellectual Property</h3>
                                    <p>All content, including however not confined to images, emblems, and game designs, are the belongings of Zettagame. Unauthorized use, reproduction, or distribution is illegal.</p>
                                    <h3 class="fw-6 mt-2">6. Purchases & Payments</h3>
                                     <ul>
                                        <li>(1) All purchases made on Zettagame are very last and non-refundable until said in any other case.</li>
                                        <li>(2) Zettagame reserves the right to alter pricing, charge terms, and refund guidelines at any time.</li>
                                    </ul>
                                    <h3 class="fw-6 mt-2">7. Limitation of Liability</h3>
                                    <p>Zettagame shall now not be responsible for any direct, oblique, incidental, or consequential damages arising from the usage of our offerings.</p>
                                     <h3 class="fw-6 mt-2">8. Termination</h3>
                                     <p>We reserve the right to suspend or terminate your access to Zettagame at our sole discretion, with or without be aware, for any violation of these terms.</p>
                                     <h3 class="fw-6 mt-2">9. Privacy Policy</h3>
                                     <p>Your use of Zettagame is also governed by means of our Privacy Policy. Please review it to recognize how we gather, use, and shield your statistics.</p>
                                     <h3 class="fw-6">10. Changes to Terms & Conditions</h3>
                                     <p>Zettagame reserves the right to alter those Terms & Conditions at any time. Changes may be powerful without delay upon posting on our internet site.</p>
                                       <h3 class="fw-6">11. Contact Information</h3>
                                     <p>For any questions or worries concerning these Terms & Conditions, please contact us at </p>
                                    <ul>
                                        <li>(1) Email: <a href="mailto:info@zettamobi.com">info@zettamobi.com</a></li>
                                        <li>(2) Address: Sector 63, Noida, Uttar Pradesh 201301</li>
                                    </ul>
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