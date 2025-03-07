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
    $game_res4=mysqli_query($con,"select * from meta_data where page='contact us'");
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
                                    Contact Us
                                 </li>
                              </ol>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ==== / breadcrumb end ==== -->
               <!-- ==== contact section start ==== -->
               <section class="contact pt-120 pb-120 fade-wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="text-center mb-50">
                              <h1 class="title-lg fw-8 stroked-text transform-none title-animation mt-8">Contact
                                 Us
                              </h1>
                           </div>
                        </div>
                     </div>
                     <div class="row vertical-column-gap-lg">
                        <div class="col-12 col-lg-4">
                           <div class="contact__content">
                              <div class="contact__intro fade-top">
                                 <h4 class="fw-7 mt-8">Get In Touch</h4>
                                 <p class="mt-12 text-alter">Have a query about our platform, games, or events? Our team is ready to help you out. Feel free to reach out to us using any of the contact options below
                                 </p>
                              </div>
                              <hr class="divider mt-40 mb-40">
                              <div class="contact__information fade-top">
                                 <h4 class="fw-7 mt-8">Information</h4>
                                 <div class="contact__information-wrapper mt-20">
                                    <div class="contact__infromation-single">
                                       <div class="thumb">
                                          <i class="ti ti-phone-call"></i>
                                       </div>
                                       <div class="content">
                                          <p class="text-md text-alter fw-6">Phone:</p>
                                          <p class="text-xl fw-6 mt-6"><a href="tel:9999 999-999">(+91)
                                             99 9999-9999</a>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="contact__infromation-single">
                                       <div class="thumb">
                                          <i class="ti ti-map-pin"></i>
                                       </div>
                                       <div class="content">
                                          <p class="text-md text-alter fw-6">Location:</p>
                                          <p class="text-xl fw-6 mt-6"><a
                                             href="#"
                                             target="_blank">H-110, H Block, Sector 63, Noida, Uttar Pradesh 201301</a></p>
                                       </div>
                                    </div>
                                    <div class="contact__infromation-single">
                                       <div class="thumb">
                                          <i class="ti ti-mail"></i>
                                       </div>
                                       <div class="content">
                                          <p class="text-md text-alter fw-6">E-mail:</p>
                                          <p class="text-xl fw-6 mt-6"><a
                                             href="mailto:info@zettamobi.com">info@zettamobi.com</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-lg-7 offset-lg-1">
                           <div class="contact__form">
                              <form action="#" method="post">
                                 <div class="input-single fade-top">
                                    <div class="ic-group">
                                       <input type="text" name="contact-name" id="contactName"
                                          placeholder="Your Name" required>
                                       <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                          fill="none" preserveAspectRatio="none" class="cmn-shape">
                                          <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                             vector-effect="non-scaling-stroke" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="input-single fade-top">
                                    <div class="ic-group">
                                       <input type="email" name="contact-email" id="contactEmail"
                                          placeholder="Your Email" required>
                                       <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                          fill="none" preserveAspectRatio="none" class="cmn-shape">
                                          <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                             vector-effect="non-scaling-stroke" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="input-single fade-top">
                                    <div class="ic-group">
                                       <input type="text" name="contact-number" id="contactNumber"
                                          placeholder="Phone Number" required>
                                       <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                          fill="none" preserveAspectRatio="none" class="cmn-shape">
                                          <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                             vector-effect="non-scaling-stroke" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="input-single fade-top">
                                    <div class="ic-group">
                                       <textarea name="c-message" id="cMessage" cols="30" rows="10"
                                          placeholder="Type Your Message..."></textarea>
                                       <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                          fill="none" preserveAspectRatio="none" class="cmn-shape">
                                          <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                             vector-effect="non-scaling-stroke" />
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="section__cta mt-40">
                                    <div class="btn-wrapper">
                                       <button type="submit" aria-label="send message" title="send message"
                                          class="btn--secondary">Submit Now </button>
                                       <svg viewBox="0 0 100 102" xmlns="www.w3.org/2000/svg.html"
                                          fill="none" preserveAspectRatio="none" class="shape">
                                          <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                       </svg>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
                <!-- ==== blog section start ==== -->
               <section class="pt-120 pb-120 blog-area fade-wrapper">
                  <div class="container-fluid">
                     <div class="row vertical-column-gap-lg">
                        <div class="col-12 col-xl-12">
                           <div class="blog-area__content">
                              <div class="blog-details">
                                 <div class="details__content">
                                    <p class="text-center">At game zettagame, we’re here to connect with you and make your <a href="https://zettagame.com/disclaimer" style="color:blue">gaming experience</a> better than ever<br>
                                    Whether you have questions, feedback, or need support, we’d love to hear from you.</p>
                                    <h3 class="fw-6">How to Contact Us</h3>
                                    <ul>
                                        <li><b>(1) Email:</b> Got a question or need support? Drop us a message at [your email address], and we’ll get back to you as soon as possible.</li>
                                        <li><b>(2) Live Chat:</b> Connect with us instantly using our live chat feature for real-time assistance.</li>
                                        <li><b>(3) Gaming Guides:</b>  Follow us on [Facebook/Twitter/Instagram] for updates, announcements, and community interactions.</li>
                                    </ul>
                                    <h3 class="fw-6 mt-4">What Can We Help With?</h3>
                                    <ul>
                                        <li><b>(1)</b> Technical support for gaming issues</li>
                                        <li><b>(2)</b> Inquiries about our latest games, updates, and features</li>
                                        <li><b>(3)</b> Information on upcoming gaming tournaments or events</li>
                                        <li><b>(4)</b> Suggestions to improve your gaming experience</li>
                                        <li><b>(5)</b> Any general questions about our platform</li>
                                    </ul>
                                    <p class="mt-4">We value our gaming community and are committed to providing you with the best possible experience.
                                    Your feedback and suggestions help us improve and bring more excitement to the world of gaming. </p>
                                    <h3 class="fw-6">Join the Conversation</h3>
                                    <p>Become a part of our vibrant gaming community! Whether you’re a casual player, a competitive gamer, or someone new to the gaming world, we’re here to support and inspire you.</p>
                                 </div>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / blog section end ==== -->
               <!-- ==== / contact section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <?php include('footerurl.php');?>