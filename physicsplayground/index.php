<!doctype html>
<html lang=en-US>
    <link rel=stylesheet href=https://zettagame.com/physicsplayground/styles.css media=screen>
    <title>Sand Game</title>
    <meta name=keywords content="sand, falling, game">
    <meta name=description content="Project Sand: A modern version of the classic Hell of Sand Falling Game">
    <meta name=subject content="Project Sand">
    <meta charset=UTF-8>
    <meta name=google content=notranslate>
    <link rel=icon href=https://zettagame.com/physicsplayground/assets/favicon.ico type=image/x-icon>
    <meta name=viewport content="width=device-width,initial-scale=1,minimum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <link href="https://zettagame.com/physicsplayground/model.css" rel="stylesheet" type="text/css">
    <body style="background: #0c0f1e;">
  <div class="container">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-sm-12 col-md-6" style="background: #faf8ef;color: #776e65;font-family: "Clear Sans", "Helvetica Neue", Arial, sans-serif;">
              <div class="styles_draggable__uzjbU" style="transform: translate(0px, 0px);"><div>
                  <button id="openModalBtn" class="flex h-8 w-10 items-center justify-center rounded-r-full bg-primary-content text-primary shadow-md" style="padding: 0px 19px 6px;margin-left: -16px;border-right: 4px solid #fff;border-radius: 5px;border-bottom: none;border-left: none;border-top: none;">
                      <svg width="8px" height="100%" viewBox="0 0 34 60" fill="none" xmlns="http://www.w3.org/2000/svg" alt="back">
                          <g clip-path="url(#clip0_54_14)">
                              <path d="M10.187 29.549L32.554 7.199C33.3275 6.40201 33.7561 5.33248 33.747 4.22188C33.7379 3.11127 33.2919 2.0489 32.5054 1.26468C31.719 0.480453 30.6553 0.0374414 29.5447 0.0315125C28.4341 0.0255835 27.3658 0.457214 26.571 1.233L1.23 26.557C0.46374 27.3255 0.0233285 28.3598 0.000418017 29.4448C-0.0224924 30.5298 0.373863 31.5819 1.107 32.382L26.549 57.882C26.9388 58.2836 27.4044 58.6038 27.919 58.8239C28.4335 59.044 28.9866 59.1597 29.5463 59.1643C30.1059 59.1689 30.6608 59.0622 31.1789 58.8506C31.697 58.6389 32.1678 58.3264 32.5641 57.9312C32.9604 57.5361 33.2742 57.0661 33.4874 56.5486C33.7005 56.0312 33.8088 55.4765 33.8058 54.9169C33.8028 54.3573 33.6887 53.8038 33.47 53.2886C33.2513 52.7735 32.9325 52.3069 32.532 51.916L10.187 29.549Z" fill="currentColor"></path>
                          </g>
                        </svg>
                    </button>
               </div>
            </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-98DP5VKS42"></script>
    <script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","G-98DP5VKS42")</script>
    <div class=wrapper id=gameWrapper>
        <div id=titleWrapper>
            <div class=subheader><div class=column-left>
               
                </div>
                <div class=column-center>By: 3kh0 and retronbv</div>
                </div></div><br>
                <canvas id=mainCanvas>Your browser doesn't support HTML5 canvas. :(</canvas>
                <div id=menuWrapper><table id=elementTable></table>
                <div id=optionsCol1 class=optionsCol>
                    <div id=penSizeDiv>
                        <label for=pensize>Pen Size</label> 
                        <select id=pensize></select>
                        </div>
                        <div>
                            <select id=spigot1Type class=spigotType></select>
                            <select id=spigot1Size></select>
                            </div><div>
                                <select id=spigot2Type class=spigotType></select> 
                                <select id=spigot2Size></select>
                                </div><div>
                                    <select id=spigot3Type class=spigotType></select>
                                    <select id=spigot3Size></select></div><div>
                                        <select id=spigot4Type class=spigotType></select> 
                                        <select id=spigot4Size></select>
                                        </div></div>
                                        <div id=optionsCol2 class=optionsCol><div>
                                            <label for=overwriteCheckbox>Overwrite</label>
                                            <input type=checkbox id=overwriteCheckbox></div>
                                            <div id=speedSliderDiv><label for=speedSlider>Speed</label>
                                            <input type=range id=speedSlider></div><div class=optionButtonContainer>
                                                <input id=saveButton class=optionButton type=button value=Save> 
                                                <input id=loadButton class=optionButton type=button value=Load>
                                                </div><div id=clearButtonDiv class=optionButtonContainer>
                                                    <input id=clearButton class=optionButton type=button value=Clear></div></div>
                                                    <div id=fps-counter></div></div></div><br>
                                                    
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
                        <a  href="https://zettagame.com/games/physicsplayground" style="font-size: 20px;color: #fff;">
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
<script src=https://zettagame.com/physicsplayground/scripts/util.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/canvasConfig.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/cursor.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/particles.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/elements.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/spigots.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/menu.js></script>
<script src=https://zettagame.com/physicsplayground/scripts/game.js></script>
<script src="https://zettagame.com/physicsplayground/modelpo.js"></script>
