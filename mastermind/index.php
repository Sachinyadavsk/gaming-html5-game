<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Mastermind (Interactive Game) </title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://zettagame.com/mastermind/src/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://zettagame.com/mastermind/model.css">
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
<div class='game'>
  <h1 class='header'>Mastermind</h1>
  <div class='top'>
    <div class='code'>
      <span class='color-one'></span>
      <span class='color-two'></span>
      <span class='color-three'></span>
      <span class='color-four'></span>    
    </div>
  </div>

  <div class='middle'>

    <div class='grid'>
      <div class='dots1'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='one-1' id='space'></span></div>
      <div><span class='one-2' id='space'></span></div>
      <div><span class='one-3' id='space'></span></div>
      <div><span class='one-4' id='space'></span></div>
      <div class='dots2'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='two-1' id='space'></span></div>
      <div><span class='two-2' id='space'></span></div>
      <div><span class='two-3' id='space'></span></div>
      <div><span class='two-4' id='space'></span></div>
      <div class='dots3'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='three-1' id='space'></span></div>
      <div><span class='three-2' id='space'></span></div>
      <div><span class='three-3' id='space'></span></div>
      <div><span class='three-4' id='space'></span></div>
      <div class='dots4'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='four-1' id='space'></span></div>
      <div><span class='four-2' id='space'></span></div>
      <div><span class='four-3' id='space'></span></div>
      <div><span class='four-4' id='space'></span></div>
      <div class='dots5'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='five-1' id='space'></span></div>
      <div><span class='five-2' id='space'></span></div>
      <div><span class='five-3' id='space'></span></div>
      <div><span class='five-4' id='space'></span></div>
      <div class='dots6'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='six-1' id='space'></span></div>
      <div><span class='six-2' id='space'></span></div>
      <div><span class='six-3' id='space'></span></div>
      <div><span class='six-4' id='space'></span></div>   
      <div class='dots7'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='seven-1' id='space'></span></div>
      <div><span class='seven-2' id='space'></span></div>
      <div><span class='seven-3' id='space'></span></div>
      <div><span class='seven-4' id='space'></span></div>
      <div class='dots8'>
        <div class='one1'></div>
        <div class='one2'></div>
        <div class='one3'></div>
        <div class='one4'></div>
      </div>
      <div><span class='eight-1' id='space'></span></div>
      <div><span class='eight-2' id='space'></span></div>
      <div><span class='eight-3' id='space'></span></div>
      <div><span class='eight-4' id='space'></span></div>
    </div>  
  </div>

  <div class='bottom'>
    <span class='red' id='color'></span>
    <span class='yellow' id='color'></span>
    <span class='green' id='color'></span>
    <span class='blue' id='color'></span>
    <span class='black' id='color'></span>
    <span class='delete'>X</span>
    <span class='submit'>√</span>
  </div>
</div>
<div class='rules'>
  <div class='content'>
    <p><span class='how'>How to Play:</span>The code is a four color code containing the colored buttons displayed. The code may contain multiples of the same color. Try to guess the correct code (color and order) by clicking on the colored buttons </p>
  </div>
</div>
<!-- partial -->
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
                        <a  href="https://zettagame.com/games/mastermind" style="font-size: 20px;color: #fff;">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="styles_icon___eDJ1" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                              <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M248 64C146.39 64 64 146.39 64 248s82.39 184 184 184 184-82.39 184-184S349.61 64 248 64z"></path>
                          <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M220 220h32v116"></path>
                          <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M208 340h88"></path>
                          <path d="M248 130a26 26 0 1026 26 26 26 0 00-26-26z"></path></svg>ABOUT THIS GAME</a>
                    </div>
                    <div class="row">
                                 <?php 
                                include('confige.php');
                                $gameimage = "SELECT * FROM games where status='1' limit 22";
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

    <script src="https://zettagame.com/mastermind/modelpo.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script  src="https://zettagame.com/mastermind/src/index.js"></script>

</body>
</html>
