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
    $game_res4=mysqli_query($con,"select * from meta_data where page='home'");
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
               <!-- ==== profile banner start ==== -->
               <section class="profile-banner">
                  <div class="container-fluid">
                     <div class="profile-banner__inner">
                        <div class="profile-thumb">
                           <img src="https://zettagame.com/assets/images/profile/profile-banner.png" alt="Image" class="parallax-image">
                        </div>
                        <div class="profile-meta">
                           <div class="profile-meta__left">
                              <div class="profile-meta-group">
                                 <div class="profile-meta__thumb">
                                    <span class="hexagon-wrapper">
                                       <img src="https://zettagame.com/assets/images/profile/profile-avatar.png" alt="View Profile">
                                    </span>
                                 </div>
                                 <div class="profile-meta__info">
                                    <h3 class="fw-6"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h3>
                                    <p class="text-xl text-alter"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / profile banner end ==== -->
               <!-- ==== profile tab start ==== -->
               <div class="private-profile pt-120 pb-120">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="private-profile__btns">
                              <ul>
                                 <li><button data-target="#privateProfile" class="private-tab-btn active">My
                                    Profile</button>
                                 </li>
                                 <li><button data-target="#privatechangepassword" class="private-tab-btn">Change Password</button>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-12">
                           <div class="private-items mt-40">
                              <div class="private-item__single private-withdraw private-profile"
                                 id="privateProfile">
                                 <div class="row">
                                    <div class="col-12 col-xl-9">
                                       <div class="private-content">
                                           
                                          <h6 class="fw-6 mt-5">My Profile</h6>
                                          <form action="https://zettagame.com/user-update-profile" method="post" class="mt-30">
                                              <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                                             <div class="profile-input-group">
                                                <label for="name" class="text-alter fw-6">Name</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="text" name="name" id="name" required  value="<?php echo $_SESSION['user_name'];?>">
                                                </div>
                                             </div>
                                             <div class="profile-input-group mt-30">
                                                <label for="email" class="text-alter fw-6">Email</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="email" name="email" id="email" required  value="<?php echo $_SESSION['user_email'];?>">
                                                </div>
                                             </div>
                                             <div class="profile-input-group mt-30">
                                                <label for="mobile" class="text-alter fw-6">Phone Number</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="number" name="mobile" id="mobile" required  value="<?php echo $_SESSION['user_mobile'];?>">
                                                </div>
                                             </div>
                                            
                                             <div class="form-cta mt-40">
                                                <button type="submit" title="update profile"
                                                   class="btn--primary">Update Profile</button>
                                             </div>
                                          </form>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="private-item__single private-withdraw private-profile"
                                 id="privatechangepassword">
                                 <div class="row">
                                    <div class="col-12 col-xl-9">
                                       <div class="private-content">
                                           
                                         <h6 class="fw-6 mt-40">Change Passowrd</h6>
                                          <form action="https://zettagame.com/user-update-password" method="post" class="mt-30">
                                              <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                                             <div class="profile-input-group mt-24">
                                                <label for="profilePassword" class="text-alter fw-6">Current Password</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="password" name="profile-Password" id="profilePassword" required value="345u9g9">
                                                </div>
                                             </div>
                                             <div class="profile-input-group mt-30">
                                                <label for="profilenewPassword" class="text-alter fw-6">New Password</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="password" name="profile-newPassword" id="profilenewPassword" required placeholder="Enter New Password">
                                                </div>
                                             </div>
                                             <div class="profile-input-group mt-30">
                                                <label for="profileconfirmPassword" class="text-alter fw-6">Confirm Password</label>
                                                <div class="input-wrapper mt-12">
                                                   <input type="password" name="profile-confirmPassword" id="profileconfirmPassword" required placeholder="Confirm Password">
                                                </div>
                                             </div>
                                             <div class="form-cta mt-40">
                                                <button type="submit" title="Change Password"
                                                   class="btn--primary">Change Password</button>
                                             </div>
                                          </form>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ==== / profile tab end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
          <?php include('footerurl.php');?>