<!DOCTYPE HTML>
<html>
	<head>
		<meta name="description" content="Arcade Claw Machine">
		<meta name="keywords" content="arcade claw machine">
		<meta name="author" content="Wendy Seijas">
		<meta name="copyright" content="Wendy Seijas">
		<meta name="date" content="2018-08-05" scheme="YYYY-MM-DD">
		<meta name="revised" content="2018-08-05" scheme="YYYY-MM-DD">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Claw Crane</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://hammerjs.github.io/dist/hammer.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-hammerjs@2.0.0/jquery.hammer.min.js"></script>
        <link rel="stylesheet" href="https://zettagame.com/clawCrane/styles.css">
        <link rel="stylesheet" href="https://zettagame.com/clawCrane/model.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
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
		<div id="main">
<svg width="340px" height="460px" version="1.1" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 3600000 4600000" style="position:absolute;top:0;left:0;">
	<defs>
		<linearGradient id="id0" gradientUnits="userSpaceOnUse" x1="1.13348e+06" y1="4.24542e+06" x2="2.46652e+06" y2="320943">
			<stop offset="0" stop-opacity="1" stop-color="#5B5B5B"/>
			<stop offset="1" stop-opacity="1" stop-color="#403F3F"/>
		</linearGradient>
		<linearGradient id="id1" gradientUnits="userSpaceOnUse" x1="580669" y1="3.44318e+06" x2="654583" y2="4.26414e+06">
			<stop offset="0" stop-opacity="1" stop-color="#4A4A4A"/>
			<stop offset="1" stop-opacity="1" stop-color="#1F1B20"/>
		</linearGradient>
	</defs>
	<path fill="url(#id0)" d="M320943 169111l2958114 0c103737,0 188600,84934 188600,188588l0 4039550 -3335314 0 0 -4039550c0,-103737 84863,-188588 188600,-188588zm695757 3140950l0 -1210579 -46607 0 0 1210579 -704934 0 0 -2704529 3069682 0 0 2704529 -2318141 0z"/>
	<rect fill="#C5C6C6" x="265159" y="697705" width="3069682" height="56989"/>
	<rect fill="url(#id1)" stroke="#898989" stroke-width="19996.2" x="265159" y="3441070" width="704934" height="825183" rx="105154" ry="105154"/>
	<rect fill="#434242" x="332353" y="4397249" width="154655" height="111095"/>
	<rect fill="#434242" x="3112993" y="4397249" width="154655" height="111095"/>
	<path fill="#FDF38E" fill-rule="nonzero" d="M555866 430940l0 -30638 -30638 0 0 -45638 76276 0 0 121914 -152706 0c-30531,0 -45791,-15260 -45791,-45792l0 -106914c0,-30531 15260,-45791 45791,-45791l152706 0 -59 30425 59 15213 -137599 0c-10158,0 -15260,5102 -15260,15319l0 76583c0,10216 10204,15319 30638,15319l76583 0zm91382 45638l0 -198497 152553 0c30425,0 45638,15260 45638,45850l0 30532c0,30579 -15213,45839 -45638,45839l-15319 0 60957 45744 0 30532 -26268 0 -111025 -76276 -15260 0 0 76276 -45638 0zm45638 -121914l91643 0c10157,0 15272,-5162 15272,-15473 0,-10311 -5115,-15472 -15272,-15472l-91643 0 0 30945zm244242 121914l-45638 0 0 -152706c0,-30531 15213,-45791 45638,-45791l106914 0c30426,0 45638,15260 45638,45791l0 152706 -45638 0 0 -61264 -106914 0 0 61264zm91643 -152859l-76383 0c-10157,0 -15260,5102 -15260,15319l0 30638 106914 0 0 -30638c0,-10217 -5114,-15319 -15271,-15319zm305151 107115c0,30484 -15213,45744 -45638,45744l-152552 0 0 -198497 122020 0 30532 0c30425,0 45638,15319 45638,45909l0 30567c0,15060 -7984,23138 -23870,24131 15886,-1725 23870,10570 23870,36933l0 15213zm-152552 -76170l91642 0c10170,0 15272,-5162 15272,-15473 0,-10311 -5102,-15472 -15272,-15472l-91642 0 0 30945zm0 76276l91642 0c10170,0 15272,-5103 15272,-15319 0,-10217 -5102,-15319 -15272,-15319l-91642 0 0 30638zm397195 45638l-45626 0 0 -152706c0,-30531 15201,-45791 45626,-45791l106915 0c30425,0 45638,15260 45638,45791l0 152706 -45638 0 0 -61264 -106915 0 0 61264zm91655 -152859l-76383 0c-10157,0 -15272,5102 -15272,15319l0 30638 106915 0 0 -30638c0,-10217 -5103,-15319 -15260,-15319zm259915 152859l0 -198497 152552 0c30425,0 45638,15260 45638,45850l0 30532c0,30579 -15213,45839 -45638,45839l-106914 0 0 76276 -45638 0zm45638 -121914l91642 0c10169,0 15272,-5162 15272,-15473 0,-10311 -5103,-15472 -15272,-15472l-91642 0 0 30945zm198603 121914l0 -198497 152553 0c30425,0 45638,15260 45638,45850l0 30532c0,30579 -15213,45839 -45638,45839l-15319 0 60957 45744 0 30532 -26268 0 -111024 -76276 -15260 0 0 76276 -45639 0zm45639 -121914l91642 0c10169,0 15272,-5162 15272,-15473 0,-10311 -5103,-15472 -15272,-15472l-91642 0 0 30945zm396841 121914l-198285 0 0 -45638 76323 0 0 -107221 -76323 0 0 -45638 198285 0 0 45638 -76324 0 0 107221 76324 0 0 45638zm46004 -198497l198450 0 0 38185 -122115 114674 122115 0 0 45638 -198450 0 0 -37926 122115 -114933 -122115 0 0 -45638zm244242 198497l0 -198497 198296 0 0 45638 -152658 0 0 30945 122127 0 0 45638 -122127 0 0 30638 152658 0 0 45638 -198296 0zm244242 -61111l0 -114508c0,-15272 7618,-22878 22830,-22878 15201,0 22808,7606 22808,22878l0 114508 -45638 0zm23598 61111c-15732,0 -23598,-7819 -23598,-23445 0,-14799 7452,-22193 22346,-22193 15532,0 23292,7866 23292,23598 0,14693 -7347,22040 -22040,22040z"/>
	<g id="b_drop" style="cursor:pointer;display:none;">
		<path fill="#434242" stroke="#898989" stroke-width="19996.2" d="M2261188 4266252l883447 0c104623,0 190206,-85583 190206,-190206l0 -11c0,-104623 -85607,-190206 -190206,-190206l-883447 0c-104599,0 -190206,85607 -190206,190206l0 11c0,104600 85583,190206 190206,190206z"/>
		<path fill="#FDF38E" fill-rule="nonzero" d="M2467481 4123114c0,26905 -13406,40346 -40205,40346l-134387 0 0 -174851 107481 0 26906 0c26799,0 40205,13441 40205,40335l0 94170zm-134387 141l80729 0c8941,0 13453,-4488 13453,-13488l0 -67465c0,-9000 -4512,-13488 -13453,-13488l-80729 0 0 94441zm174946 40205l0 -174851 134387 0c26799,0 40205,13441 40205,40382l0 26894c0,26941 -13406,40382 -40205,40382l-13500 0 53705 40300 0 26893 -23138 0 -97796 -67193 -13453 0 0 67193 -40205 0zm40205 -107398l80729 0c8941,0 13453,-4535 13453,-13630 0,-9083 -4512,-13618 -13453,-13618l-80729 0 0 27248zm349538 67052c0,26905 -13406,40346 -40205,40346l-94182 0c-26799,0 -40205,-13441 -40205,-40346l0 -94170c0,-26894 13406,-40335 40205,-40335l94182 0c26799,0 40205,13441 40205,40335l0 94170zm-134387 -80812l0 67465c0,9000 4500,13488 13453,13488l67276 0c8941,0 13453,-4488 13453,-13488l0 -67465c0,-9000 -4512,-13488 -13453,-13488l-67276 0c-8953,0 -13453,4488 -13453,13488zm174946 121158l0 -174851 134387 0c26799,0 40205,13441 40205,40382l0 26894c0,26941 -13406,40382 -40205,40382l-94182 0 0 67193 -40205 0zm40205 -107398l80729 0c8941,0 13453,-4535 13453,-13630 0,-9083 -4512,-13618 -13453,-13618l-80729 0 0 27248z"/>
	</g>
</svg>
			<div id="toys"></div>
			<div id="claw">
				<div style="position:absolute;top:0;left:10px;width:40px;height:20px;background:#5b5b5b;border-radius:5px;"></div>
				<div id="clawBar"></div>
				<div id="clawALL">
					<div id="clawBall"></div>
					<div id="leftClaw"></div>
					<div id="rightClaw"></div>
				</div>
			</div>
			<div id="moveContainer">
				<div id="moveControl"></div>
			</div>
			<div style="position:absolute;top:331px;left:35px;width:52px;height:12px;background-color:#565656;border-bottom:2px solid #898989;"></div>
		</div>
		<div class="row">
                  <div class="col-md-2"></div>
                   <div class="col-md-8"><p class="game_contents"><b>How to play:</b> Use your click the mouse and screen<br>re you referring to "Claw Crane" as in the arcade-style claw crane machine game? Or are you looking for tools to create or manage a virtual or physical claw crane machine? Let me know the context, and I can assist accordingly!</p></div>
                    <div class="col-md-2"></div>
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
                        <a  href="https://zettagame.com/games/clawCrane" style="font-size: 20px;color: #fff;">
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

        <script src="https://zettagame.com/clawCrane/modelpo.js"></script>
        <script src="https://zettagame.com/clawCrane/index.js"></script>
	</body>
</html>
