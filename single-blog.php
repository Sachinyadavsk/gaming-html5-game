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
                                    Blog Details
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
                     <div class="row">
                        <div class="col-12 col-xl-8">
                           <div class="ts-header text-center mb-60">
                              <h2 class="title-animation title-lg stroked-text fw-8 transform-none mt-8">
                                 Blog Details
                              </h2>
                           </div>
                        </div>
                     </div>
                     <div class="row vertical-column-gap-lg">
                     <?php 
                       if($_REQUEST['blog']!=''){
                           $id=$_REQUEST['blog'];
                           }	else{
                           header("location:https://zettagame.com/");
                           } ?>
                        <?php require('connection.php');?>
                        <?php                                                                                                               
                                    
                           $cat_res4=mysqli_query($con,"select * from blogs where url='$id' and status='1'");
                           $cat_arr4=array();
                           while($row4=mysqli_fetch_assoc($cat_res4)){
                              $cat_arr4[]=$row4;    
                           }
                           foreach($cat_arr4 as $list){
                              $title=$list['title'];
                              $keywords=$list['keywords'];
                              $descriptions=$list['descriptions'];
                              $img=$list['image1'];
                           }
                           ?>
                        <div class="col-12 col-xl-8">
                           <div class="blog-area__content">
                              <div class="blog-details">
                                 <div class="details__poster">
                                    <div class="thumb fade-top">
                                       <img src="https://zettagame.com/assets/images/blog/one.png" alt="Image">
                                    </div>
                                 </div>
                                 <div class="details__content">
                                    <div class="item-meta">
                                       <p class="text-md"><i class="ti ti-calendar-stats"></i>02 Apr 2023
                                       </p>
                                       <p class="text-md"><a href="https://zettagame.com/blog-single.html"><i
                                          class="ti ti-message"></i> Comments (03)</a></p>
                                    </div>
                                    <h3 class="fw-6">Beyond the Console Exploring Gaming Frontiers</h3>
                                    <p>Contrary to common misconceptions, gaming offers numerous to benefits
                                       beyond mere entertainment. Studies have shown that gaming can enhance
                                       cognitive improve problem-solving abilities, how and foster strategic
                                       thinking. Additionally, online multiplayer games provide opportunities
                                       for social interaction, teamwork, and cooperation, promoting valuable
                                       skills in communication
                                       gaming and how it can be a source of personal growth and development
                                       numerous to benefits beyond mere entertainment.
                                    </p>
                                    <p>From action-packed shooters to immersive role-playing games (RPGs) and
                                       strategy-based simulations, the gaming industry boasts an array of
                                       genres that cater to every player's preferences. Whether you prefer
                                       intense battles, mind-bending puzzles, or epic quests, there's a game
                                       genre to suit every taste mind-bending puzzles, or epic quests.
                                    </p>
                                    <div class="quote-wrapper fade-top">
                                       <blockquote>
                                          <q class="text-xxl fw-6">Dive into the fascinating world of game
                                          development. Gain insights into the creative process, industry
                                          trends, and exclusive interviews with game developers. Explore
                                          how your favorite games come to life behind the scenes.</q>
                                       </blockquote>
                                       <div class="quote-footer">
                                          <h4> <span></span>Thompson Scot</h4>
                                          <i class="ti ti-quote"></i>
                                       </div>
                                    </div>
                                    <p>From action-packed shooters to immersive role-playing games (RPGs) and
                                       strategy-based simulations, the gaming industry boasts an array of
                                       genres that cater to every player's preferences. Whether you prefer
                                       intense battles, mind-bending puzzles, or epic quests, there's a game
                                       genre to suit every taste mind-bending puzzles, or epic quests Whether
                                       you prefer intense battles.
                                    </p>
                                    <div class="group-wrapper">
                                       <h3>NFT Games Android No Investment</h3>
                                       <div class="img-group">
                                          <div class="thumb fade-top">
                                             <img src="https://zettagame.com/assets/images/blog/two.png" alt="Image">
                                          </div>
                                          <div class="thumb fade-top">
                                             <img src="https://zettagame.com/assets/images/blog/three.png" alt="Image">
                                          </div>
                                       </div>
                                    </div>
                                    <p>From action-packed shooters to immersive role-playing games (RPGs) and
                                       strategy-based simulations, the gaming industry boasts an array of
                                       genres that cater to every player's preferences. Whether you prefer
                                       intense battles, mind-bending puzzles, or epic quests, there's a game
                                       genre to suit every taste mind-bending puzzles, or epic quests Whether
                                       you prefer intense battles.
                                    </p>
                                    <p>From action-packed shooters to immersive role-playing games (RPGs) and
                                       strategy-based simulations, the gaming industry boasts an array of
                                       genres that cater to every player's preferences. Whether you prefer
                                       intense battles, mind-bending puzzles, or epic quests, there's a game
                                       genre to suit every taste mind-bending puzzles, or epic quests Whether
                                       you prefer intense battles.
                                    </p>
                                    <div class="blog-divider"></div>
                                    <div class="details-footer">
                                       <div class="details-tag">
                                          <div class="tag-header">
                                             <h5>Tags :</h5>
                                          </div>
                                          <div class="tag-wrapper">
                                             <a href="https://zettagame.com/blog.html">E-Sports</a>
                                             <a href="https://zettagame.com/blog.html">Fantasy</a>
                                             <a href="https://zettagame.com/blog.html">Tournaments</a>
                                          </div>
                                       </div>
                                       <div class="details-tag">
                                          <div class="tag-header">
                                             <h5>Share :</h5>
                                          </div>
                                          <ul class="social">
                                             <li>
                                                <a href="https://zettagame.com/" target="_blank"
                                                   aria-label="follow us on facebook" title="facebook"
                                                   class="social-btn">
                                                <i class="ti ti-brand-facebook"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="https://zettagame.com/" target="_blank"
                                                   aria-label="follow us on twitter" title="twitter"
                                                   class="social-btn social-btn-active">
                                                <i class="ti ti-brand-twitter"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="https://zettagame.com/" target="_blank"
                                                   aria-label="watch us on twitch" title="Twitch"
                                                   class="social-btn">
                                                <i class="ti ti-brand-twitch"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="https://zettagame.com/" target="_blank"
                                                   aria-label="follow us on instagram" title="instagram"
                                                   class="social-btn">
                                                <i class="ti ti-brand-instagram"></i>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="blog-comment pt-120">
                                 <div class="comment-header mb-40">
                                    <h4 class="mt-8 fw-6">03 Comments</h4>
                                 </div>
                                 <div class="comment-single fade-top">
                                    <div class="author">
                                       <a href="https://zettagame.com/" aria-label="latest games"
                                          title="view game details">
                                          <img src="assets/images/streamer/t-two.png" alt="Image">
                                          <svg viewBox="-3 -3 106 106" xmlns="www.w3.org/2000/svg.html"
                                             fill="none" class="hexagon-border">
                                             <polygon points="50 0, 100 25, 100 75, 50 100, 0 75, 0 25" />
                                          </svg>
                                       </a>
                                    </div>
                                    <div class="author-review">
                                       <div class="author-meta">
                                          <div class="author-info">
                                             <h5 class="fw-6 mt-8"><a href="https://zettagame.com/">Wade
                                                Warren</a>
                                             </h5>
                                             <p class="text-md">October 07,2023</p>
                                          </div>
                                          <div class="reply-button">
                                             <button aria-label="reply"><i
                                                class="ti ti-share-3"></i>Reply</button>
                                          </div>
                                       </div>
                                       <div class="author-content">
                                          <p>Gaming has cultivated vibrant communities and the rise of esports
                                             has brought competitive gaming to the forefront. its rapid
                                             growth, and the professional gaming scene and the rise of
                                             esports has.
                                          </p>
                                       </div>
                                       <div class="reply-comment">
                                          <form action="#" method="post">
                                             <div class="input-group">
                                                <div class="input-single">
                                                   <textarea placeholder="Join the discussion..."
                                                      required></textarea>
                                                </div>
                                                <div class="btn-wrapper">
                                                   <button type="submit"
                                                      class="btn--secondary">Submit</button>
                                                   <svg viewBox="0 0 100 102"
                                                      xmlns="http://www.w3.org/2000/svg" fill="none"
                                                      preserveAspectRatio="none" class="shape">
                                                      <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                                   </svg>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment-single fade-top">
                                    <div class="author">
                                       <a href="public-profile.html" aria-label="latest games"
                                          title="view game details">
                                          <img src="https://zettagame.com/assets/images/streamer/t-three.png" alt="Image">
                                          <svg viewBox="-3 -3 106 106" xmlns="www.w3.org/2000/svg.html"
                                             fill="none" class="hexagon-border">
                                             <polygon points="50 0, 100 25, 100 75, 50 100, 0 75, 0 25" />
                                          </svg>
                                       </a>
                                    </div>
                                    <div class="author-review">
                                       <div class="author-meta">
                                          <div class="author-info">
                                             <h5 class="fw-6 mt-8"><a href="https://zettagame.com/">Albert
                                                Flores</a>
                                             </h5>
                                             <p class="text-md">October 07,2023</p>
                                          </div>
                                          <div class="reply-button">
                                             <button aria-label="reply"><i
                                                class="ti ti-share-3"></i>Reply</button>
                                          </div>
                                       </div>
                                       <div class="author-content">
                                          <p>Gaming has cultivated vibrant communities and the rise of esports
                                             has brought competitive gaming to the forefront. its rapid
                                             growth, and the professional gaming scene and the rise of
                                             esports has.
                                          </p>
                                       </div>
                                       <div class="reply-comment">
                                          <form action="#" method="post">
                                             <div class="input-group">
                                                <div class="input-single">
                                                   <textarea placeholder="Join the discussion..."
                                                      required></textarea>
                                                </div>
                                                <div class="btn-wrapper">
                                                   <button type="submit"
                                                      class="btn--secondary">Submit</button>
                                                   <svg viewBox="0 0 100 102"
                                                      xmlns="http://www.w3.org/2000/svg" fill="none"
                                                      preserveAspectRatio="none" class="shape">
                                                      <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                                   </svg>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment-single fade-top">
                                    <div class="author">
                                       <a href="https://zettagame.com/" aria-label="latest games"
                                          title="view game details">
                                          <img src="https://zettagame.com/assets/images/streamer/t-four.png" alt="Image">
                                          <svg viewBox="-3 -3 106 106" xmlns="www.w3.org/2000/svg.html"
                                             fill="none" class="hexagon-border">
                                             <polygon points="50 0, 100 25, 100 75, 50 100, 0 75, 0 25" />
                                          </svg>
                                       </a>
                                    </div>
                                    <div class="author-review">
                                       <div class="author-meta">
                                          <div class="author-info">
                                             <h5 class="fw-6 mt-8"><a href="https://zettagame.com/">Guy
                                                Hawkins</a>
                                             </h5>
                                             <p class="text-md">October 07,2023</p>
                                          </div>
                                          <div class="reply-button">
                                             <button aria-label="reply"><i
                                                class="ti ti-share-3"></i>Reply</button>
                                          </div>
                                       </div>
                                       <div class="author-content">
                                          <p>Gaming has cultivated vibrant communities and the rise of esports
                                             has brought competitive gaming to the forefront. its rapid
                                             growth, and the professional gaming scene and the rise of
                                             esports has.
                                          </p>
                                       </div>
                                       <div class="reply-comment">
                                          <form action="#" method="post">
                                             <div class="input-group">
                                                <div class="input-single">
                                                   <textarea placeholder="Join the discussion..."
                                                      required></textarea>
                                                </div>
                                                <div class="btn-wrapper">
                                                   <button type="submit"
                                                      class="btn--secondary">Submit</button>
                                                   <svg viewBox="0 0 100 102"
                                                      xmlns="http://www.w3.org/2000/svg" fill="none"
                                                      preserveAspectRatio="none" class="shape">
                                                      <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                                   </svg>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment__form mt-120">
                                    <div class="comment-header mb-40">
                                       <h4 class="mt-8 fw-6">Leave A Comment</h4>
                                    </div>
                                    <form action="#" method="post">
                                       <div class="form-group">
                                          <div class="input-single">
                                             <div class="ic-group">
                                                <input type="text" name="comment-name" id="commentName"
                                                   placeholder="Enter Your Name" required>
                                                <svg viewBox="0 0 100 100"
                                                   xmlns="http://www.w3.org/2000/svg" fill="none"
                                                   preserveAspectRatio="none" class="cmn-shape">
                                                   <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                                      vector-effect="non-scaling-stroke" />
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="input-single">
                                             <div class="ic-group">
                                                <input type="email" name="comment-email" id="commentEmail"
                                                   placeholder="Enter Your Email" required>
                                                <svg viewBox="0 0 100 100"
                                                   xmlns="http://www.w3.org/2000/svg" fill="none"
                                                   preserveAspectRatio="none" class="cmn-shape">
                                                   <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                                      vector-effect="non-scaling-stroke" />
                                                </svg>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="input-single">
                                          <div class="ic-group">
                                             <textarea name="comment-message" id="commentMessage" cols="30"
                                                rows="10" placeholder="Type Your Comments..."></textarea>
                                             <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                                fill="none" preserveAspectRatio="none" class="cmn-shape">
                                                <path d="M0 0  L100 0  L100 79 L96 100 L0 100 Z"
                                                   vector-effect="non-scaling-stroke" />
                                             </svg>
                                          </div>
                                       </div>
                                       <div class="cta mt-40">
                                          <div class="btn-wrapper">
                                             <button type="submit" class="btn--secondary">Submit
                                             Comment</button>
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
                        <div class="col-12 col-xl-4">
                           <div class="blog-area__sidebar">
                              <div class="sidebar__widget fade-top">
                                 <div class="author-meta-wrapper">
                                    <div class="author-meta">
                                       <a href="https://zettagame.com/" aria-label="view profile"
                                          title="view profile">
                                          <span class="hexagon-wrapper">
                                             <img src="https://zettagame.com/assets/images/avatar/avatar.png" alt="View Profile">
                                             <svg viewBox="-3 -3 106 106" xmlns="www.w3.org/2000/svg.html"
                                                fill="none" class="hexagon-border">
                                                <polygon
                                                   points="50 0, 100 25, 100 75, 50 100, 0 75, 0 25" />
                                             </svg>
                                          </span>
                                       </a>
                                       <p class="text-xxl fw-6"><a href="https://zettagame.com/">Wade Warren</a>
                                       </p>
                                    </div>
                                    <p class="text-md">Crypto Advisor</p>
                                 </div>
                                 <div class="content">
                                    <p class="text-md">Welcome to the exciting realm of online gaming, virtual
                                       adventures await at every turn. Welcome to the exciting realm of online
                                       gaming, virtual adventures await at every turn.
                                    </p>
                                    <ul class="social">
                                       <li>
                                          <a href="www.facebook.com/index.html" target="_blank"
                                             aria-label="follow us on facebook" title="facebook"
                                             class="social-btn">
                                          <i class="ti ti-brand-facebook"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="www.twitter.com/index.html" target="_blank"
                                             aria-label="follow us on twitter" title="twitter"
                                             class="social-btn social-btn-active">
                                          <i class="ti ti-brand-twitter"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="www.twitch.tv/index.html" target="_blank"
                                             aria-label="watch us on twitch" title="Twitch"
                                             class="social-btn">
                                          <i class="ti ti-brand-twitch"></i>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="www.instagram.com/index.html" target="_blank"
                                             aria-label="follow us on instagram" title="instagram"
                                             class="social-btn">
                                          <i class="ti ti-brand-instagram"></i>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="sidebar__widget fade-top">
                                 <div class="sidebar__widget-header">
                                    <h5 class="fw-6">Search Here</h5>
                                 </div>
                                 <div class="sidebar__widget-search">
                                    <form action="#" method="post" autocomplete="off">
                                       <div class="search-wrap">
                                          <input type="search" name="search-field-post" id="searchFieldPost"
                                             placeholder="Search" required>
                                          <svg viewBox="0 0 100 100" xmlns="www.w3.org/2000/svg.html"
                                             fill="none" preserveAspectRatio="none" class="cmn-shape">
                                             <path d="M0 0  L100 0  L100 75 L92 100 L0 100 Z"
                                                vector-effect="non-scaling-stroke" />
                                          </svg>
                                          <button type="submit" aria-label="search post" title="search post">
                                          <i class="ti ti-search"></i>
                                          </button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="sidebar__widget fade-top">
                                 <div class="sidebar__widget-header">
                                    <h5 class="fw-6">Recent Posts</h5>
                                 </div>
                                 <div class="recent-item-wrapper">
                                    <div class="recent-item-single">
                                       <div class="recent-thumb">
                                          <a href="https://zettagame.com/">
                                          <img src="https://zettagame.com/assets/images/blog/five.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="recent-content">
                                          <p class="text-md"><i class="ti ti-calendar-stats"></i>02 Apr 2023
                                          </p>
                                          <h6 class="fw-6"><a href="https://zettagame.com/">Game Craft Crafting the
                                             Ultimate</a>
                                          </h6>
                                       </div>
                                    </div>
                                    <div class="divide"></div>
                                    <div class="recent-item-single">
                                       <div class="recent-thumb">
                                          <a href="https://zettagame.com/">
                                          <img src="https://zettagame.com/assets/images/blog/six.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="recent-content">
                                          <p class="text-md"><i class="ti ti-calendar-stats"></i>02 Apr 2023
                                          </p>
                                          <h6 class="fw-6"><a href="https://zettagame.com/">Play to earn crypto
                                             games place</a>
                                          </h6>
                                       </div>
                                    </div>
                                    <div class="divide"></div>
                                    <div class="recent-item-single">
                                       <div class="recent-thumb">
                                          <a href="https://zettagame.com/">
                                          <img src="https://zettagame.com/assets/images/blog/seven.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="recent-content">
                                          <p class="text-md"><i class="ti ti-calendar-stats"></i>02 Apr 2023
                                          </p>
                                          <h6 class="fw-6"><a href="https://zettagame.com/">Game Craft Crafting the
                                             Ultimate</a>
                                          </h6>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="sidebar__widget fade-top">
                                 <div class="sidebar__widget-header">
                                    <h5 class="fw-6">Categories</h5>
                                 </div>
                                 <div class="sidebar__categories">
                                    <ul>
                                       <li><a href="https://zettagame.com/"><span>Gaming</span><span>(12)</span></a>
                                       </li>
                                       <li><a
                                          href="https://zettagame.com/"><span>Electronic</span><span>(12)</span></a>
                                       </li>
                                       <li><a href="https://zettagame.com/"><span>Online</span><span>(12)</span></a>
                                       </li>
                                       <li><a
                                          href="https://zettagame.com/"><span>Tournaments</span><span>(12)</span></a>
                                       </li>
                                       <li><a
                                          href="https://zettagame.com/"><span>Controller</span><span>(12)</span></a>
                                       </li>
                                       <li><a href="https://zettagame.com/"><span>Live</span><span>(12)</span></a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="sidebar__widget fade-top">
                                 <div class="sidebar__widget-header">
                                    <h5 class="fw-6">Tags</h5>
                                 </div>
                                 <div class="sidebar__tags">
                                    <a href="https://zettagame.com/" class="btn--primary">E-Sports</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Fantasy</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Tournaments</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Live</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Streamers</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Matches</a>
                                    <a href="https://zettagame.com/" class="btn--primary">Landing</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- ==== / blog section end ==== -->
               <!-- ==== cta section start ==== -->
               <section class="cta mb-120 fade-wrapper">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <div class="cta__inner fade-top">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="cta__content">
                                       <h2 class="fw-6 text-capitalize title-animation mt-8">Ready to start
                                          your
                                          journey?
                                       </h2>
                                       <p class="text-xl mt-24">Don't just get the game. Get more from your
                                          game. Unlock exclusive rewards, members-only content from your game
                                          and a library of top titles.
                                       </p>
                                       <div class="section__cta mt-50">
                                          <div class="btn-wrapper">
                                             <a href="https://zettagame.com/" class="btn--secondary">Play Now </a>
                                             <svg viewBox="0 0 100 102" xmlns="www.w3.org/2000/svg.html"
                                                fill="none" preserveAspectRatio="none" class="shape">
                                                <path d="M0 1  L100 1  L100 55 L80 101 L0 101 Z" />
                                             </svg>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cta__bg">
                                 <img src="https://zettagame.com/assets/images/cta/cta-bg.png" alt="Image" class="parallax-image">
                              </div>
                              <div class="cta-stroke">
                                 <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    preserveAspectRatio="none">
                                    <path d="M0 0 L95 0 L100 20 L100 100 L5 100 L0 80 L0 0 Z"
                                       vector-effect="non-scaling-stroke" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="cta__thumb fade-left">
                     <img src="https://zettagame.com/assets/images/cta/cta-thumb.png" alt="Image">
                  </div>
               </section>
               <!-- ==== / cta section end ==== -->
            </main>
            <!-- ==== / main content end ==== -->
            <!-- ==== footer start ==== -->
            <?php include('footer.php');?>
            <!-- ==== / footer end ==== -->
         </div>
         <?php include('footerurl.php');?>