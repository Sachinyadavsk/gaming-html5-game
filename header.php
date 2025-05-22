 <style>

button {
   float: right;
    padding: 15px 11px;
    margin-top: 0px;
    margin-right: 14px;
    font-size: 17px;
    background: #39424d;
    border-left: none;
    cursor: pointer;
}
button:hover {
  background: #ccc;
}
.search-container_mobile{
    display:none;
}
.search-container input[type=text] {
   padding: 9px;
    /*border-radius: 5px;*/
    background: #505d6aa8;
}


@media screen and (max-width: 600px) {
    .search-container
    {
     display:none;
    }
    .search-container_mobile{
    display:block;
    width:100%;
    margin-top: 10px;
}
button {
    float: right;
    padding: 15px 8px;
    margin-top: 0px;
    margin-right: 10%;
    font-size: 17px;
    background: #39424d;
    border-left: none;
    cursor: pointer;
    width: 10%;
}
button:hover {
  background: #ccc;
   width:10%;
}

.search-container_mobile input[type=text] {
    padding: 9px;
    /*border-radius: 5px;*/
    background: #505d6aa8;
     width:80%;
}
}
 </style>
 
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
         <!-- ==== sidebar start ==== -->
         <aside class="nftg-sidebar" data-lenis-prevent>
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="sidebar__wrapper">
                        <div class="sidebar__widget">
                           <a href="https://zettagame.com/" class="sidebar__logo not-cursor" aria-label="home page"
                              title="logo">
                           <img src="https://zettagame.com/assets/images/logo.png" alt="Logo">
                           </a>
                        </div>
                        
                        <div class="sidebar__widget sidebar--images">
                           <div class="sidebar__widget-slider">
                              <div class="sidebar-game-slider swiper">
                                  
                                  <div class="swiper-wrapper">
                                   <?php 
                                              $sql="select * from games where status='1' order by games.id desc";
                                              $res=mysqli_query($con,$sql);
                                              $i=1;
        							                 while($row=mysqli_fetch_assoc($res)){?>
                                   <div class="swiper-slide">
                                      <div class="sidebar-slider__single">
                                         <a href="https://zettagame.com/games/<?php echo urlencode($row['name']); ?>" aria-label="latest games"
                                            title="<?php echo $row['name'];?>">
                                            <img src="https://zettagame.com/images/games/<?php echo $row['image']?>" alt="Image">
                                            <svg viewBox="-3 -3 106 106" xmlns="www.w3.org/2000/svg.html" fill="none"
                                               class="hexagon-border">
                                               <polygon points="50 0, 100 25, 100 75, 50 100, 0 75, 0 25" />
                                            </svg>
                                         </a>
                                      </div>
                                   </div>
                                   <?php $i++; } ?>
                                </div>
                                 
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </aside>
         <!-- ==== / sidebar end ==== -->
         <!-- ==== layout start ==== -->
         <div class="nftg-layout">
            <!-- ==== header start ==== -->
            <header class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-12">
                        <nav class="navbar p-0">
                           <div class="navbar__logo d-xxl-none">
                              <a href="https://zettagame.com/home" aria-label="home page" title="logo" class="not-cursor">
                              <img src="https://zettagame.com/assets/images/logo.png" alt="Image">
                              </a>
                           </div>
                           <div class="navbar__menu d-none d-xl-block">
                              <ul class="navbar__list">
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/puzzle-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" alt="Puzzle">
                                             <path id="Path_39354" data-name="Path 39354"
                                                d="M93.367,11.609,90.413,8.682a3.916,3.916,0,0,0,2.158-3.723,3.923,3.923,0,0,0-7.444-1.564L82.25.438a1.371,1.371,0,0,0-1.918,0L77.348,3.4a.48.48,0,0,0,.211.806,2.946,2.946,0,0,1,1.66,1.152,3,3,0,0,1-.106,3.551,2.954,2.954,0,0,1-5.18-1.075.479.479,0,0,0-.806-.211L70.173,10.6a1.344,1.344,0,0,0-.019,1.9l.019.019L73.127,15.4a3.925,3.925,0,1,0,5.286,5.288l2.878,2.956a1.342,1.342,0,0,0,1.9.02l.019-.02,2.964-2.965A.48.48,0,0,0,86.18,20a.475.475,0,0,0-.218-.127,2.944,2.944,0,0,1-1.66-1.152,3,3,0,0,1,.105-3.551,2.954,2.954,0,0,1,5.18,1.075.475.475,0,0,0,.8.211l2.983-2.975a1.344,1.344,0,0,0,.02-1.9l-.02-.019Z"
                                                transform="translate(-69.77 -0.047)" fill="#fff"></path>
                                          </svg> &nbsp;Puzzle</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/fun-games"><svg width="16px" height="16px" viewBox="0 0 24 23" fill="none"
                                             xmlns="http://www.w3.org/2000/svg" alt="Fun">
                                             <path
                                                d="M17.1453 9.35598C17.2065 9.4933 17.2255 9.64564 17.2001 9.79378C17.1746 9.94193 17.1058 10.0792 17.0023 10.1883C16.8989 10.2973 16.7654 10.3732 16.6188 10.4064C16.4722 10.4396 16.319 10.4285 16.1787 10.3747C16.0384 10.3208 15.9172 10.2265 15.8304 10.1038C15.7436 9.98105 15.6952 9.83532 15.6913 9.68506C15.6873 9.5348 15.728 9.38675 15.8082 9.25963C15.8884 9.1325 16.0046 9.032 16.1419 8.97086C16.326 8.88886 16.5352 8.88338 16.7233 8.9556C16.9115 9.02783 17.0633 9.17185 17.1453 9.35598Z"
                                                fill="white"></path>
                                             <path
                                                d="M20.3217 5.39216C19.5431 4.70448 18.6292 4.18731 17.6387 3.87387C16.6483 3.56042 15.6032 3.45765 14.5707 3.57214C13.9655 3.66143 13.3851 3.87379 12.8652 4.1961C12.3452 4.51841 11.8969 4.94385 11.5477 5.44615C11.1536 5.81573 10.7245 6.14618 10.2665 6.43286L9.87457 5.55268C9.71991 5.20536 9.52116 4.5721 9.9151 4.39668C10.2482 4.28057 10.551 4.09125 10.8012 3.84266C11.0514 3.59406 11.2427 3.29252 11.361 2.96022C11.4793 2.62793 11.5216 2.27333 11.4848 1.92253C11.4479 1.57174 11.3329 1.23367 11.1481 0.933197L10.7326 0L8.87901 0.825396L9.2917 1.75219C9.51881 2.2622 9.54975 2.33167 9.08635 2.53802C7.69615 3.15707 7.27576 4.70455 8.01813 6.37168L8.43083 7.29848C7.64176 7.56816 6.82189 7.73747 5.99054 7.80246C5.37474 7.71808 4.74812 7.76259 4.15043 7.93315C3.55273 8.10371 2.99701 8.39661 2.51847 8.79327C1.73155 9.49588 1.10147 10.3564 0.66931 11.3188C0.237149 12.2811 0.0125954 13.3238 0.0102774 14.3787C-0.17263 18.4567 2.10642 22.0769 5.20381 22.6132C6.05781 22.7564 6.93507 22.6457 7.72671 22.2947C8.10123 22.1273 8.45373 21.9144 8.77627 21.6609C9.52221 21.0027 10.1282 20.2012 10.5583 19.3041C10.9884 18.4071 11.2338 17.4327 11.2798 16.4389C12.1192 15.6168 13.216 15.1087 14.3859 15C15.1399 15.6169 16.0114 16.0743 16.9474 16.3444C17.8834 16.6146 18.8646 16.6919 19.8314 16.5716C20.4523 16.4767 21.0462 16.2517 21.5741 15.9113C22.102 15.5709 22.552 15.1228 22.8947 14.5964C24.5655 11.9905 23.4305 7.94631 20.3218 5.38993L20.3217 5.39216ZM8.31818 14.4611L6.92798 15.0801L7.54703 16.4703L5.69436 17.2953L5.07246 15.8987L3.68226 16.5178L2.85727 14.6651L4.24747 14.0461L3.62842 12.6559L5.48109 11.8309L6.10014 13.2211L7.49034 12.602L8.31818 14.4611ZM17.5891 12.2199C17.0851 12.4443 16.5259 12.5142 15.9821 12.4208C15.4384 12.3274 14.9346 12.0749 14.5344 11.6952C14.1342 11.3154 13.8555 10.8255 13.7337 10.2874C13.612 9.74934 13.6525 9.18722 13.8501 8.67215C14.0478 8.15708 14.3938 7.7122 14.8443 7.39376C15.2949 7.07532 15.8297 6.89763 16.3812 6.88315C16.9327 6.86868 17.4761 7.01808 17.9427 7.31245C18.4094 7.60682 18.7782 8.03295 19.0026 8.53694C19.1516 8.87126 19.2332 9.2317 19.2426 9.5976C19.2521 9.9635 19.1892 10.3277 19.0576 10.6692C18.926 11.0108 18.7283 11.323 18.4759 11.588C18.2234 11.853 17.9211 12.0656 17.5863 12.2135L17.5891 12.2199Z"
                                                fill="white"></path>
                                          </svg> &nbsp;Fun</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/board-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" alt="Board">
                                             <g id="Group_21598" data-name="Group 21598" transform="translate(-444.79 3296)">
                                                <path id="Path_38164" data-name="Path 38164" d="M228.49,158.49h3.5v3.5h-3.5Z"
                                                   transform="translate(222.55 -3448.24)" fill="#fff"></path>
                                                <path id="Path_38165" data-name="Path 38165" d="M143.96,158.49h3.5v3.5h-3.5Z"
                                                   transform="translate(303.079 -3448.24)" fill="#fff"></path>
                                                <path id="Path_38166" data-name="Path 38166" d="M313.02,158.49h3.5v3.5h-3.5Z"
                                                   transform="translate(142.02 -3448.24)" fill="#fff"></path>
                                                <path id="Path_38167" data-name="Path 38167" d="M143.96,327.55h3.5v3.5h-3.5Z"
                                                   transform="translate(303.079 -3609.3)" fill="#fff"></path>
                                                <path id="Path_38168" data-name="Path 38168" d="M228.49,327.55h3.5v3.5h-3.5Z"
                                                   transform="translate(222.55 -3609.3)" fill="#fff"></path>
                                                <path id="Path_38169" data-name="Path 38169" d="M313.02,327.55h3.5v3.5h-3.5Z"
                                                   transform="translate(142.02 -3609.3)" fill="#fff"></path>
                                                <path id="Path_38170" data-name="Path 38170" d="M397.54,327.55h3.5v3.5h-3.5Z"
                                                   transform="translate(61.499 -3609.3)" fill="#fff"></path>
                                                <path id="Path_38171" data-name="Path 38171" d="M482.07,243.02h3.5v3.5h-3.5Z"
                                                   transform="translate(-19.031 -3528.77)" fill="#fff"></path>
                                                <path id="Path_38172" data-name="Path 38172" d="M482.07,158.49h3.5v3.5h-3.5Z"
                                                   transform="translate(-19.031 -3448.24)" fill="#fff"></path>
                                                <path id="Path_38173" data-name="Path 38173" d="M143.96,243.02h3.5v3.5h-3.5Z"
                                                   transform="translate(303.079 -3528.77)" fill="#fff"></path>
                                                <path id="Path_38174" data-name="Path 38174" d="M228.49,243.02h3.5v3.5h-3.5Z"
                                                   transform="translate(222.55 -3528.77)" fill="#fff"></path>
                                                <path id="Path_38175" data-name="Path 38175" d="M397.54,243.02h3.5v3.5h-3.5Z"
                                                   transform="translate(61.499 -3528.77)" fill="#fff"></path>
                                                <path id="Path_38176" data-name="Path 38176" d="M313.02,243.02h3.5v3.5h-3.5Z"
                                                   transform="translate(142.02 -3528.77)" fill="#fff"></path>
                                                <path id="Path_38177" data-name="Path 38177" d="M397.54,158.49h3.5v3.5h-3.5Z"
                                                   transform="translate(61.499 -3448.24)" fill="#fff"></path>
                                                <path id="Path_38178" data-name="Path 38178" d="M397.54,412.07h3.5v3.5h-3.5Z"
                                                   transform="translate(61.499 -3689.821)" fill="#fff"></path>
                                                <path id="Path_38179" data-name="Path 38179" d="M143.96,412.07h3.5v3.5h-3.5Z"
                                                   transform="translate(303.079 -3689.821)" fill="#fff"></path>
                                                <path id="Path_38180" data-name="Path 38180" d="M228.49,412.07h3.5v3.5h-3.5Z"
                                                   transform="translate(222.55 -3689.821)" fill="#fff"></path>
                                                <path id="Path_38181" data-name="Path 38181" d="M313.02,412.07h3.5v3.5h-3.5Z"
                                                   transform="translate(142.02 -3689.821)" fill="#fff"></path>
                                                <path id="Path_38182" data-name="Path 38182" d="M482.07,412.07h3.5v3.5h-3.5Z"
                                                   transform="translate(-19.031 -3689.821)" fill="#fff"></path>
                                                <path id="Path_38183" data-name="Path 38183"
                                                   d="M118.725,26.414H98.105a1.691,1.691,0,0,0-1.69,1.69v20.62a1.691,1.691,0,0,0,1.69,1.69h20.62a1.688,1.688,0,0,0,1.69-1.69V28.1A1.688,1.688,0,0,0,118.725,26.414Zm-.06,6v16a.25.25,0,0,1-.25.25h-20a.25.25,0,0,1-.25-.25v-20a.25.25,0,0,1,.25-.25h20a.25.25,0,0,1,.25.25Z"
                                                   transform="translate(348.375 -3322.414)" fill="#fff"></path>
                                                <path id="Path_38184" data-name="Path 38184" d="M482.07,327.55h3.5v3.5h-3.5Z"
                                                   transform="translate(-19.031 -3609.3)" fill="#fff"></path>
                                                <path id="Path_38185" data-name="Path 38185" d="M482.07,73.961h3.5v3.5h-3.5Z"
                                                   transform="translate(-19.031 -3367.711)" fill="#fff"></path>
                                                <path id="Path_38186" data-name="Path 38186" d="M143.96,73.961h3.5v3.5h-3.5Z"
                                                   transform="translate(303.079 -3367.711)" fill="#fff"></path>
                                                <path id="Path_38187" data-name="Path 38187" d="M397.54,73.961h3.5v3.5h-3.5Z"
                                                   transform="translate(61.499 -3367.711)" fill="#fff"></path>
                                                <path id="Path_38188" data-name="Path 38188" d="M228.49,73.961h3.5v3.5h-3.5Z"
                                                   transform="translate(222.55 -3367.711)" fill="#fff"></path>
                                                <path id="Path_38189" data-name="Path 38189" d="M313.02,73.961h3.5v3.5h-3.5Z"
                                                   transform="translate(142.02 -3367.711)" fill="#fff"></path>
                                             </g>
                                          </svg>&nbsp; Board</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/sports-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" alt="Sports">
                                             <path id="Path_39355" data-name="Path 39355"
                                                d="M82.689,0a11.991,11.991,0,0,1,7.329,2.512,12.262,12.262,0,0,0-5.259,4.242c-.839.056-1.678.056-2.573.056-.839,0-1.678,0-2.462-.056a12.149,12.149,0,0,0-4.7-4.018A12.218,12.218,0,0,1,82.689,0Zm7.72,2.791a12.438,12.438,0,0,1,2.406,2.735A38.272,38.272,0,0,1,85.878,6.7a11.255,11.255,0,0,1,4.532-3.851Zm2.965,3.684a12.27,12.27,0,0,1-.392,11.665,11.647,11.647,0,0,0-9.007-6.977A13.209,13.209,0,0,1,85.15,7.814a45.2,45.2,0,0,0,8.224-1.339Zm-.615,12.112A12.857,12.857,0,0,1,88.283,22.6,11.655,11.655,0,0,1,83.752,13.4a8.231,8.231,0,0,1,.056-1.172,11.888,11.888,0,0,1,8.951,6.363Zm-5.147,4.353A12.055,12.055,0,0,1,77.038,22.6a11.568,11.568,0,0,0,4.643-9.321,8.232,8.232,0,0,0-.056-1.172c.224,0,.392-.056.559-.056s.392.056.559.056a9.867,9.867,0,0,0-.056,1.284,11.775,11.775,0,0,0,4.923,9.544ZM81.458,11.051A12.53,12.53,0,0,0,80.4,7.87c.559.056,1.175.056,1.79.056.671,0,1.287,0,1.9-.056a10.349,10.349,0,0,0-1.175,3.181c-.224,0-.448-.056-.727-.056-.224,0-.5.056-.727.056ZM76.423,22.27a12.376,12.376,0,0,1-4.308-4.521,11.6,11.6,0,0,1,8.448-5.526,6.747,6.747,0,0,1,.056,1.061,11.766,11.766,0,0,1-4.2,8.986Zm-4.587-5.079A12.388,12.388,0,0,1,70.661,12a12.108,12.108,0,0,1,1.231-5.3,42.647,42.647,0,0,0,7.385,1.116,11.345,11.345,0,0,1,1.175,3.349,11.773,11.773,0,0,0-8.616,6.028ZM72.4,5.749A12.96,12.96,0,0,1,74.633,3.07,11.768,11.768,0,0,1,78.605,6.7a42.522,42.522,0,0,1-6.21-.949Z"
                                                transform="translate(-70.661)" fill="#fff" fill-rule="evenodd"></path>
                                          </svg>&nbsp; Sports</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/arcade-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24 24" alt="Arcade">
                                             <path id="Path_39356" data-name="Path 39356"
                                                d="M102.165,40.313,100.4,38.551a2.064,2.064,0,1,0-1.958,1.414,2.086,2.086,0,0,0,.66-.109l2.593,2.592-3.8,3.8-.834-.834-1.17,1.17.985.985a2.1,2.1,0,0,0,2.951,2.951l.985.985,1.17-1.17-.834-.834,3.8-3.8,2.6,2.6a2.066,2.066,0,1,0,1.3-1.3l-1.758-1.758,12.58-12.58L119.9,27.5l-5.154.233Z"
                                                transform="translate(-95.898 -27.5)" fill="#fff"></path>
                                          </svg>&nbsp;Arcade</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/shooter-games">&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                             height="16px" viewBox="0 0 24 24" alt="Shooter">
                                             <g id="Group_21599" data-name="Group 21599" transform="translate(-2281.924 3296)">
                                                <path id="Path_38272" data-name="Path 38272"
                                                   d="M380.55,94.979V89.19a9.12,9.12,0,0,1,7.555,7.555h-5.789a3.557,3.557,0,0,0-1.766-1.766Z"
                                                   transform="translate(1914.814 -3382.186)" fill="#fff"></path>
                                                <path id="Path_38273" data-name="Path 38273"
                                                   d="M164.993,96.745H159.2a9.126,9.126,0,0,1,7.555-7.555v5.789a3.511,3.511,0,0,0-1.762,1.766Z"
                                                   transform="translate(2125.729 -3382.186)" fill="#fff"></path>
                                                <path id="Path_38274" data-name="Path 38274"
                                                   d="M119.454,37.452a.478.478,0,0,1-.48.48h-11.04v11.04a.48.48,0,1,1-.96,0V37.932H95.934a.48.48,0,1,1,0-.96h11.04V25.932a.48.48,0,1,1,.96,0v11.04h11.04A.475.475,0,0,1,119.454,37.452Z"
                                                   transform="translate(2186.47 -3321.452)" fill="#fff"></path>
                                                <path id="Path_38275" data-name="Path 38275"
                                                   d="M166.745,312.3V318.1a9.131,9.131,0,0,1-7.555-7.555h5.793a3.5,3.5,0,0,0,1.762,1.761Z"
                                                   transform="translate(2125.738 -3593.1)" fill="#fff"></path>
                                                <path id="Path_38276" data-name="Path 38276"
                                                   d="M382.316,310.547h5.789a9.126,9.126,0,0,1-7.555,7.555v-5.794a3.511,3.511,0,0,0,1.766-1.761Z"
                                                   transform="translate(1914.814 -3593.107)" fill="#fff"></path>
                                             </g>
                                          </svg>Shooter</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/card-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24.53 21.776" alt="Card">
                                             <g id="Group_21602" data-name="Group 21602" transform="translate(1547.805 3296)">
                                                <path id="Path_38073" data-name="Path 38073"
                                                   d="M362,98.752l-9.18-1.45.229,1.422L360.43,99.9h0a.909.909,0,0,1,.759,1.047L358.9,115.4a.912.912,0,0,1-.9.773.8.8,0,0,1-.146-.014l-3.311-.521a1.913,1.913,0,0,1-.631.219l-3.375.535,8.457,1.34h0a.916.916,0,0,0,1.047-.764L362.763,99.8A.916.916,0,0,0,362,98.752Z"
                                                   transform="translate(-1886.05 -3391.964)" fill="#fff"></path>
                                                <path id="Path_38074" data-name="Path 38074"
                                                   d="M408.616,143.833l-2.291,14.458-2.712-.43a1.847,1.847,0,0,0,.146-1.061l-2.227-14.087Z"
                                                   transform="translate(-1934.378 -3435.001)" fill="#fff"></path>
                                                <path id="Path_38075" data-name="Path 38075"
                                                   d="M238.23,221.449l2.164,2.488,1.288-3.035-2.164-2.488Z"
                                                   transform="translate(-1779.613 -3506.746)" fill="#fff"></path>
                                                <path id="Path_38076" data-name="Path 38076"
                                                   d="M131.651,89.655c-2.295-14.441-2.562-16.209-2.721-17.166a.916.916,0,0,0-1.047-.764l-11.746,1.862a.916.916,0,0,0-.759,1.047L118.1,91.8a.916.916,0,0,0,1.048.764c12.736-2.019,10.16-1.612,11.746-1.862a.918.918,0,0,0,.759-1.047Zm-5.512-7.56-1.545,3.64a.592.592,0,0,1-.456.355.57.57,0,0,1-.093.007.59.59,0,0,1-.448-.2L121,82.91h0a.691.691,0,0,1-.114-.716l1.545-3.64a.595.595,0,0,1,1-.157l2.593,2.982h0a.691.691,0,0,1,.114.716Z"
                                                   transform="translate(-1663.171 -3367.714)" fill="#fff"></path>
                                             </g>
                                          </svg>&nbsp;Card</a>
                                    </li>
                                    <li class="navbar__item nav-fade">
                                       <a href="https://zettagame.com/racing-games"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                             viewBox="0 0 24.079 24.079" alt="Racing">
                                             <g id="Group_21600" data-name="Group 21600" transform="translate(-1668.831 3296)">
                                                <path id="Path_38248" data-name="Path 38248"
                                                   d="M334.22,263.36a.86.86,0,1,1-.86-.86.86.86,0,0,1,.86.86"
                                                   transform="translate(1347.51 -3547.32)" fill="#fff"></path>
                                                <path id="Path_38249" data-name="Path 38249"
                                                   d="M293.48,385h-3.44a1.29,1.29,0,1,0,0,2.58h3.44a1.29,1.29,0,1,0,0-2.58Zm-2.58,1.72h-.86a.43.43,0,0,1,0-.86h.86a.43.43,0,1,1,0,.86Zm2.58,0h-.86a.43.43,0,1,1,0-.86h.86a.43.43,0,0,1,0,.86Z"
                                                   transform="translate(1389.11 -3663.801)" fill="#fff"></path>
                                                <path id="Path_38250" data-name="Path 38250"
                                                   d="M150.321,70a10.331,10.331,0,1,0,7.293,3.026A10.319,10.319,0,0,0,150.321,70Zm9.664,8.175-1.247.334-.222-.831,1.247-.334Zm-.884-2.428-1.49.86-.43-.745,1.49-.86Zm-2.091-2.725.608.608-.912.912-.608-.608Zm-2.117-1.483.745.43-.86,1.49-.745-.43Zm-2.428-.884.831.223-.334,1.247-.831-.222Zm-2.574-.226h.86v1.72h-.86Zm-1.714.226.334,1.247-.831.222-.334-1.247Zm-2.428.884.86,1.49-.745.43-.86-1.49Zm-2.117,1.483.912.912-.608.608-.912-.912ZM141.972,75l1.49.86-.43.745-1.49-.86Zm-1.091,2.342,1.247.334-.222.831-1.247-.334Zm-.448,2.545h1.72v.86h-1.72Zm.226,2.574,1.247-.334.222.831-1.247.334Zm1.314,3.173-.43-.745,1.49-.86.43.745Zm10.07,3.282H148.6a2.15,2.15,0,0,1,0-4.3h3.44a2.15,2.15,0,0,1,0,4.3Zm4.674-4.948a.429.429,0,0,1-.519.193l-5.976-2.135a1.716,1.716,0,1,1,1.625-2.494l.04.021,4.73,3.87a.43.43,0,0,1,.1.544Zm.162-1.515h0a.43.43,0,0,1-.31-.524,6.45,6.45,0,1,0-11.833,1.612.43.43,0,0,1-.744.43A7.31,7.31,0,1,1,157.4,82.147a.43.43,0,0,1-.524.31Zm1.794,3.182-1.49-.86.43-.745,1.49.86Zm1.091-2.342-1.247-.334.222-.831,1.247.334Zm-1.271-2.546v-.86h1.72v.86Z"
                                                   transform="translate(1530.549 -3364.28)" fill="#fff"></path>
                                                <path id="Path_38251" data-name="Path 38251"
                                                   d="M373.84,289.512l2.653.946-2.165-1.771A1.709,1.709,0,0,1,373.84,289.512Z"
                                                   transform="translate(1308.202 -3572.22)" fill="#fff"></path>
                                                <path id="Path_38252" data-name="Path 38252"
                                                   d="M117.041,35a12.053,12.053,0,1,0,8.509,3.53A12.04,12.04,0,0,0,117.041,35Zm0,23.219a11.192,11.192,0,1,1,7.9-3.278,11.18,11.18,0,0,1-7.9,3.278Z"
                                                   transform="translate(1563.829 -3330.998)" fill="#fff"></path>
                                             </g>
                                          </svg>&nbsp;Racing</a>
                                    </li>
                                 </ul>
                           </div>
                           <div class="navbar__items-wrapper">
                               <div class="navbar__items">
                                   
                                   <div class="search-container">
                                       <form action="https://zettagame.com/result_search.php" method="post" autocomplete="off">
                                          <input type="text" placeholder="Search.." name="search" required>
                                         <button type="search" aria-label="search games" title="search games"><i class="ti ti-search"></i></button>
                                        </form>
                                  </div>
                                
                                 <?php
                                 $isLoggedIn = isset($_SESSION['user_email']) && !empty($_SESSION['user_email']);
                                 ?>
                                 <?php if ($isLoggedIn): ?>
                                   <div class="profile-dropdown nftg-modal-wrapper">
                                   <button type="button" aria-label="view profile" title="view profile"
                                      class="open-profile nftg-open-modal">
                                      <span class="hexagon-wrapper">
                                         <img src="https://zettagame.com/assets/images/avatar/avatar.png" alt="View Profile">
                                      </span>
                                      <span class="text-xl fw-6"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                                      <span class="profile-dropdown-btn rotate">
                                         <i class="ti ti-chevron-down"></i>
                                      </span>
                                   </button>
                                   <div class="profile-dropdown__modal nftg-modal-body">
                                      <div class="profile-dropdown__widget">
                                         <p class="fw-5"><?php echo htmlspecialchars(ucfirst($_SESSION['user_name'])); ?></p>
                                         <p class="text-md tertiary-text mt-4"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                                      </div>
                                      <hr>
                                      <div class="profile-dropdown__widget">
                                         <ul>
                                            <li><a href="https://zettagame.com/user-profile"><i class="ti ti-user"></i>
                                                  View Profile</a>
                                            </li>
                                         </ul>
                                      </div>
                                      <hr>
                                      <div class="profile-dropdown__widget">
                                         <a href="https://zettagame.com/logout"><i class="ti ti-logout"></i>Log Out</a>
                                      </div>
                                   </div>
                                   </div>
                                   <button class="open-offcanvas-nav d-flex d-xl-none open-mobile-menu"
                                   aria-label="toggle mobile menu" title="open offcanvas menu">
                                   <span class="icon-bar top-bar"></span>
                                   <span class="icon-bar middle-bar"></span>
                                   <span class="icon-bar bottom-bar"></span>
                                   </button>
                                   <?php else: ?>
                                      <div class="profile-dropdown nftg-modal-wrapper">
                                      <a href="https://zettagame.com/login" class="login_button_set">Login</a>
                                      </div>
                                      <button class="open-offcanvas-nav d-flex d-xl-none open-mobile-menu"
                                      aria-label="toggle mobile menu" title="open offcanvas menu">
                                      <span class="icon-bar top-bar"></span>
                                      <span class="icon-bar middle-bar"></span>
                                      <span class="icon-bar bottom-bar"></span>
                                      </button>
                                    <?php endif; ?>
                             </div>
                                   
                           </div>
                           <div class="search-container_mobile">
                                       <form action="https://zettagame.com/result_search.php" method="post" autocomplete="off">
                                          <input type="text" placeholder="Search.." name="search" required>
                                         <button type="search" aria-label="search games" title="search games"><i class="ti ti-search"></i></button>
                                        </form>
                                   </div>
                        </nav>
                     </div>
                  </div>
               </div>
               <!-- ==== mobile menu start ==== -->
               <div class="mobile-menu d-block d-xl-none" data-lenis-prevent>
                  <nav class="mobile-menu__wrapper">
                     <div class="mobile-menu__header nav-fade">
                        <!--<div class="logo">-->
                        <!--   <a href="home" aria-label="home page" title="logo">-->
                        <!--   <img src="assets/images/logo.png" alt="Image">-->
                        <!--   </a>-->
                        <!--</div>-->
                        
                        <button aria-label="close mobile menu" class="close-mobile-menu">
                        <i class="ti ti-x"></i>
                        </button>
                     </div>
                     <div class="mobile-menu__list"></div>
                  </nav>
               </div>
               <div class="mobile-menu__backdrop"></div>
               <!-- ==== / mobile menu end ==== -->
            </header>