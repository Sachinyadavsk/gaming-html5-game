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
                                    <p>Welcome to game zettagame your ultimate destination for everything gaming! Whether you're a hardcore gamer,
                                    a casual player, or just stepping into the exciting world of gaming, we are here to elevate your experience.
                                    <br>At game zettagame, we live and breathe gaming. Founded by passionate gamers, our mission is to build a vibrant
                                    community where players of all levels can come together, discover new games, improve their skills, and stay updated 
                                    with the latest trends in the gaming industry.</p>
                                    <h3 class="fw-6">What We Offer</h3>
                                    <ul>
                                        <li><b>(1) Latest Gaming News:</b> Stay informed with breaking news, updates, and developments from the gaming world.</li>
                                        <li><b>(2) Game Reviews and Previews:</b> Get honest, in-depth reviews and sneak peeks at the hottest new releases.</li>
                                        <li><b>(3) Gaming Guides:</b> Improve your gameplay with detailed tips, walkthroughs, and tutorials for all your favorite titles.</li>
                                        <li><b>(4) Community Interaction:</b> Connect with like-minded gamers, share strategies, and engage in lively discussions.</li>
                                        <li><b>(5) Esports Coverage:</b> Follow your favorite teams, tournaments, and players from the rapidly growing world of competitive gaming.</li>
                                    </ul>
                                    
                                    <h3 class="fw-6">Why Choose Us?</h3>
                                    <p>We are more than just a website; we are a community driven by a love for gaming. With a team of dedicated writers, content creators, 
                                    and gaming experts, we strive to provide high-quality content tailored to gamers' interests. </p>
                                    <h3 class="fw-6">Join the Adventure</h3>
                                    <p>Gaming is not just a hobby; it’s a lifestyle, and we’re here to celebrate it with you. Whether you're looking for the latest news,
                                        <a href="https://zettagame.com/contact-us" style="color:blue">game recommendations</a>, or a space to connect with fellow enthusiasts, game zettagame is your one-stop hub for everything gaming.</p>
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