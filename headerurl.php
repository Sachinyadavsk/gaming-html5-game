<?php include('confige.php');?>
<?php
session_start();
?>

<?php
header("Cache-Control: max-age=86400, public");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 86400) . " GMT");
$content = 'https://zettagame.com/';
$etag = md5($content);
header("ETag: \"$etag\"");
$lastModifiedTime = time();
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModifiedTime) . " GMT");
if ((isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag) ||
    (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $lastModifiedTime)) {
    header("HTTP/1.1 304 Not Modified");
    exit;
}
?>
  <?php                                                                                                               
    $game_res4=mysqli_query($con,"select * from meta_data where page='header'");
    $game_arr4=array();
    while($row4=mysqli_fetch_assoc($game_res4)){
      $game_arr4[]=$row4;    
    }
     foreach($game_arr4 as $list){
         echo htmlspecialchars_decode($list['data']);
     }?>
<!-- main css -->
<link rel="stylesheet" href="https://zettagame.com/assets/css/main.css">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta name="google-site-verification" content="AKKInmlx0DYDhngp984Zxtb4uKnzXuujoJ0rNUTH4bg" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3BKZXB6DSF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3BKZXB6DSF');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "zettagame",
  "url": "https://zettagame.com/",
  "potentialAction": {
    "@type": "SearchAction", 
    "target": "https://boardgamegeek.com/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script>
       // Function to check and request notification permission
            function requestNotificationPermission() {
                if (!("Notification" in window)) {
                    alert("This browser does not support desktop notifications.");
                    return;
                }
            
                Notification.requestPermission().then(permission => {
                    localStorage.setItem("notification_permission", permission); // Save response
                    
                    if (permission === "granted") {
                        console.log("User allowed notifications.");
                        sendNotification();
                    } else if (permission === "denied") {
                        console.log("User blocked notifications.");
                        alert("You have blocked notifications. To enable them, change settings in your browser.");
                    }
                });
            }
            
            // Function to fetch meta description
            function getMetaDescription() {
                const metaTag = document.querySelector('meta[name="description"]');
                return metaTag ? metaTag.getAttribute("content") : "No description available";
            }
            
            // Function to show notification
            function sendNotification() {
                let title = document.title; // Get the page title
                let description = getMetaDescription(); // Get the meta description
                let url = window.location.href; // Get the page URL
            
                if (Notification.permission === "granted") {
                    new Notification(title, {
                        body: description,
                        icon: "https://zettagame.com/assets/images/favicon.png" // Update with your logo URL
                    });
            
                    // Send data to the server
                    saveNotificationToDB(title, description, url);
                }
            }
            
            // Function to store the notification in the database via AJAX
            function saveNotificationToDB(title, description, url) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "save_notification.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
                let data = `title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}&url=${encodeURIComponent(url)}`;
                xhr.send(data);
            }
            
            // Check notification permission on page load
            document.addEventListener("DOMContentLoaded", function () {
                const permission = localStorage.getItem("notification_permission");
            
                if (!permission || permission === "default") {
                    requestNotificationPermission(); // Ask only if no decision has been made
                }
            });

    </script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PTVQF8VQ');</script>
<!-- End Google Tag Manager -->
</head>