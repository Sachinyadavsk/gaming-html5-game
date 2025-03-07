<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
        <link rel="stylesheet" href="https://zettagame.com/turn_on_the_light/style.css">
        <title>Turn On the Light</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://hammerjs.github.io/dist/hammer.js"></script>
        <link rel="stylesheet" href="https://zettagame.com/turn_on_the_light/model.css">
        <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-sm-12 col-md-6 mobile_game" style="background: #faf8ef;color: #776e65;font-family: "Clear Sans", "Helvetica Neue", Arial, sans-serif;">
              <div class="styles_draggable__uzjbU" style="transform: translate(0px, 0px);"><div>
                  <button id="openModalBtn" class="flex h-8 w-10 items-center justify-center rounded-r-full bg-primary-content text-primary shadow-md" style="padding: 0px 19px 6px;margin-left: -16px;border-right: 4px solid #fff;border-radius: 5px;border-bottom: none;border-left: none;border-top: none;">
                      <svg width="8px" height="100%" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg" alt="back">
                          <g clip-path="url(#clip0_54_14)"><path d="M10.187 29.549L32.554 7.199C33.3275 6.40201 33.7561 5.33248 33.747 4.22188C33.7379 3.11127 33.2919 2.0489 32.5054 1.26468C31.719 0.480453 30.6553 0.0374414 29.5447 0.0315125C28.4341 0.0255835 27.3658 0.457214 26.571 1.233L1.23 26.557C0.46374 27.3255 0.0233285 28.3598 0.000418017 29.4448C-0.0224924 30.5298 0.373863 31.5819 1.107 32.382L26.549 57.882C26.9388 58.2836 27.4044 58.6038 27.919 58.8239C28.4335 59.044 28.9866 59.1597 29.5463 59.1643C30.1059 59.1689 30.6608 59.0622 31.1789 58.8506C31.697 58.6389 32.1678 58.3264 32.5641 57.9312C32.9604 57.5361 33.2742 57.0661 33.4874 56.5486C33.7005 56.0312 33.8088 55.4765 33.8058 54.9169C33.8028 54.3573 33.6887 53.8038 33.47 53.2886C33.2513 52.7735 32.9325 52.3069 32.532 51.916L10.187 29.549Z" fill="currentColor"></path>
                          </g>
                        </svg>
                    </button>
               </div>
            </div>
        <div id="game">
            <svg id="paths" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="360px" height="460px" viewBox="0 0 360 460" E="xMidYMid meet">
                <path fill="#000000" d="M21 41l7 0 0 -14c0,-1 1,-2 2,-2 1,0 2,1 2,2l0 14 8 0 0 -14c0,-1 1,-2 2,-2 1,0 2,1 2,2l0 14 7 0c1,0 2,0 2,2l0 3c0,2 -1,3 -2,3l-1 0 0 6c0,5 -4,9 -8,9l0 3c0,1 -1,2 -2,2l-8 0c-1,0 -2,-1 -2,-2l0 -3c-4,0 -8,-4 -8,-9l0 -6 -1 0c-1,0 -2,-1 -2,-3l0 -3c0,-2 1,-2 2,-2z"/>
                <line fill="none" stroke="#000000" stroke-width="4" x1="36" y1="68" x2="36" y2= "172" />
                <path fill="none" stroke="#000000" stroke-width="4" stroke-linecap="round" d="M324 172l0 -16c0,-10 -9,-18 -18,-17 -3,1 -7,3 -9,2 -4,-2 -5,-9 -2,-9 2,0 16,6 14,2 0,-2 -21,-8 -19,-11 3,-3 24,8 23,3 -1,-4 -24,-7 -23,-12 1,-4 26,9 27,4 0,-4 -22,-9 -25,-11 -6,-5 -3,-13 -4,-17 -1,-3 -4,-8 -5,-10 -1,-1 -5,-4 -7,-12 -2,-9 -4,-18 4,-28 8,-10 24,-14 34,-11 10,2 25,14 23,33 -1,9 -7,15 -12,20 -12,10 -6,23 -12,24 -2,1 -4,1 -7,1 -6,-2 -3,-18 -4,-25 -1,-6 -5,-7 -8,-11 -2,-3 1,-5 5,-2 2,3 2,-1 4,-4 3,-4 6,-1 6,1 0,3 1,7 4,1 2,-4 7,-1 5,4 -3,6 -5,6 -10,9"/>
                <path id="mainpath" fill="none" stroke="#000000" stroke-width="4" d="M36 68l0 104 0 216c0,20 16,36 36,36l216 0c20,0 36,-16 36,-36l0 -216"/>
                <circle id="maincircle" fill="#fffd56" cx="0" cy="0" r="7">
                    <animateMotion dur="1.5s" calcmode="linear" repeatCount="indefinite">
                    <mpath xlink:href="#mainpath"/>
                </circle>
            </svg>
            <div style="position:absolute;top:15px;left:0;width:320px;text-align:center;">TURN ON</div>
            <div style="position:absolute;top:40px;left:0;width:320px;text-align:center;">THE LIGHT</div>
            <div id="level" style="position:absolute;top:70px;left:0;width:320px;text-align:center;font-size:21px;display:none;">Level: <span>0</span></div>
            <div id="moves" style="position:absolute;top:95px;left:0;width:320px;text-align:center;font-size:21px;display:none;">Moves: <span>0</span></div>
            <svg id="complete" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="360px" height="460px" viewBox="0 0 360 460" E="xMidYMid meet">
            </svg>
            <div id="lighton"></div>
            <div id="info" style="position:absolute;top:90px;left:50px;width:220px;height:auto;font-size:18px;text-align:center;">
                Click on cable<br>
                segments to rotate<br>
                clockwise until all<br>
                the segments are in<br>
                the correct position.
            </div>
            <div id="div_levels" style="position:absolute;top:248px;left:52px;width:260px;height:165px;font-size:18px;text-align:center;"></div>
            <div class="btn" id="b_menu" style="left:85px;">MENU</div>
            <div class="btn" id="b_next" style="left:150px;">NEXT LEVEL</div>
        </div>
          </div>
          <div class="col-md-3"></div>
      </div>
     
  </div>
   <div class="container-fluid">
       <!--slider the game start-->
          <div class="row">
                <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                  <div class="bg-dark rounded-lg shadow-lg w-1/2">
                        <!-- Modal Header -->
                        <div class="flex items-center justify-between px-6 py-4 border-b">
                            <button id="closeModalBtn" class="text-2xl text-red-600 font-bold">×</button>
                        </div>
                   
                       <div class="flex items-center justify-between px-6 text-2xl  font-bold  md:text-4xl">
                          <a href="https://zettagame.com/" style="font-size: 20px;color: #fff;">
                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path>
                          <path d="m11 16 5-4-5-4v3.001H3v2h8z"></path></svg>
                           EXIT</a>
                      </div>
              
                     <div class="flex items-center justify-between px-6 py-4 font-bold  ">
                        <a  href="https://zettagame.com/games/turn_on_the_light" style="font-size: 20px;color: #fff;">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="styles_icon___eDJ1" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M248 64C146.39 64 64 146.39 64 248s82.39 184 184 184 184-82.39 184-184S349.61 64 248 64z"></path>
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M220 220h32v116"></path>
                          <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M208 340h88"></path>
                          <path d="M248 130a26 26 0 1026 26 26 26 0 00-26-26z"></path></svg>ABOUT THIS GAME</a>
                    </div>
                    <div class="row">
                                 <?php 
                                include('confige.php');
                                $gameimage = "SELECT * FROM games where status='1' limit 24";
                                $resgameimage = mysqli_query($con, $gameimage);
                                $i = 1;
                                while ($rowimage = mysqli_fetch_assoc($resgameimage)) {
                                    ?>
                                   <div class="col-sm-12 col-md-2">
                                       <a href="https://zettagame.com/games/<?php echo urlencode($rowimage['name']); ?>">
                                         <img src="https://zettagame.com/images/games/<?php echo $rowimage['image']?>"
                                           alt="<?php echo $rowimage['name'];?>" style="width: 100%;height: 190px;border-radius: 15px;margin-bottom: 20px;">
                                        </a>
                                        <p><a style="color:white;text-decoration: none;" href="https://zettagame.com/games/<?php echo urlencode($rowimage['name']); ?>"><?php echo $capitalized = ucwords(str_replace("_", " ", $rowimage['name']));?></a></p>
                                    </div>
                                <?php $i++; } ?>
                                
                                </div>
                            
                 </div>
              </div>
          </div>
   </div>

        <script src="https://zettagame.com/turn_on_the_light/modelpo.js"></script>
        <script src="https://zettagame.com/turn_on_the_light/script.js"></script>
    </body>
</html>
