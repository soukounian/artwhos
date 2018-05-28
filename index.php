<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date dans le passé
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script async src="https://www.youtube.com/iframe_api"></script>
<link rel="stylesheet" type="text/css" href="artwhos.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('muteYouTubeVideoPlayer', {
    videoId: 'ZqPKJs_Osg0', // YouTube Video ID
    width: 560,               // Player width (in px)
    height: 316,              // Player height (in px)
    playerVars: {
      autoplay: 1,        // Auto-play the video on load
      controls: 0,        // Show pause/play buttons in player
      showinfo: 2,        // Hide the video title
      modestbranding: 0,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 1,              // Hide the full screen button
      cc_load_policy: 1, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 1         // Hide video controls when playing
    },
    events: {
      onReady: function(e) {
        //e.target.mute();
      }
    }
  });
 }

 // Written by @labnol 
</script>
<script type="text/javascript">
  function fermer(event)
  {
    event.preventDefault();
    news = document.getElementById("newsletter");
    news.style.display = "none";
    
  }

</script>

<script type="text/javascript">
  $(document).ready(function(){
      var op = false;
      $("#main-menu").click(function(){
        if (op === false) {
    $("#menu-test").animate({width:'1170px'});
      op = true;
      } else {
    $("#menu-test").animate({width:'0px'});
      op = false; 
      }
     })
   })
  
</script>

<script type="text/javascript">
  // Réactiver en mode production
      $(document).ready(function()
      {
          var op = false;
          $("#btn_menu").click(function()
          {
          if (op === false) 
            {
        $("#container").animate({width:'100%'});
          op = true;
            } 
          else 
            {
        $("#container").animate({width:'8px'});
          op = false; 
            }
        })
      })
  
  </script>
<script type="text/javascript">
	function start()
	{
		movie = document.getElementById('videocontrol');
		movie.play();

	}
</script>
</head>
<header>
      <div id="container_logo">
    <!--<img src="images/logo_final.png">-->
    <h1 style="color: #000000;width: 110px:margin:auto;display:inline-block;margin-top: 10px">Artwhos</h1>
      </div>

  <!--<div id="container" style="width: 1220px;height: 50px;position: absolute;top:150px">
  <div style="width: 50px;height: 50px;position: relative;float: left;" id="main-menu">-->
    <div id="btn_menu">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;cursor: pointer;color: #3b565f" xml:space="preserve"><g><path d="M81.4,13.5H18.7c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h62.7c4.1,0,7.5-3.4,7.5-7.5S85.5,13.5,81.4,13.5z" fill="#000000"/><path d="M18.7,57.5h32.7c4.1,0,7.5-3.4,7.5-7.5s-3.4-7.5-7.5-7.5H18.7c-4.1,0-7.5,3.4-7.5,7.5S14.6,57.5,18.7,57.5z" fill="#000000"/><path d="M71.4,71.5H18.7c-4.1,0-7.5,3.4-7.5,7.5s3.4,7.5,7.5,7.5h52.7c4.1,0,7.5-3.4,7.5-7.5S75.5,71.5,71.4,71.5z" fill="#000000"/></g></svg>
    <div id="menu-border"></div>
    </div>
  <!--</div>
  <div id="menu-test" style="float: left;height: 50px;width: 0px;overflow-x: hidden;overflow-y: hidden;">-->
    <div id="container">
    <!--<ul style="width: 840px">-->
      <div id="item">
     <!--<li><a href="#">Home</a></li>-->
      <li style="float: right;"><a href="./danslapresse">Home</a></li>
    </div>
      <div id="item">
      <li id="item_offset"><a href="./boutique">Boutique</a></li>
      <li id="item_offset"><div id="offset_logo"></div></li>  
      <li id="item_offset"><a href="./lookbook">Lookbook</a></li>
    </div>
    <div id="item">
      <li ><a href="./collaboration">Collaboration</a></li>
      <li ><a href=""></a></li>
    </div>    
    <!--</ul>-->
    <div id="container_reso">
<div style="background-size: cover;position: absolute;right: 50px;padding: 8px;position: absolute;" id = "social_media">
<a href="https://twitter.com/reasparis?lang=fr">
  <i class="fab fa-twitter"></i></a>
</div>


<div style="background-size: cover;position: absolute;right: 100px;padding-right: 12.5px;padding-left: 12.5px;padding-top: 8px;padding-bottom: 8px;position: absolute;" id = "social_media">
  <a href="https://www.facebook.com/ManuReasParis/?ref=br_rs">
  <i class="fab fa-facebook-f"></i>
  </a>
  </div>

<div style="background-size: cover;position: absolute;right: 150px;padding: 8px;position: absolute;" id = "social_media">
  <a href="https://www.instagram.com/maisonmanureas/">
    <i class="fab fa-instagram"></i>

  </div>
</div>
<!--<div style="background-image: url('./images/facebook.png');background-size: cover;width: 30px;height: 30px;position: absolute;right: 50px;" id = "social_media"></div>

<div style="background-image: url('./images/insta.png');background-size: cover;width: 30px;height: 30px;position: absolute;right: 90px;" id = "social_media"></div>

<div style="background-image: url('./images/Twitter.png');background-size: cover;width: 30px;height: 30px;position: absolute;right: 130px;" id = "social_media"></div>-->

  </div>
</div>
</div>
  </div>
</header>
<body>
    <div style="background-color: #fbf8ef;width: 100%;height: 100%;display: flex;position: absolute;top: 220px">
     <!-- <div id="muteYouTubeVideoPlayer"></div> -->
     <div id="containervideo">
      <video autoplay style="width: 100%;height: 100%" id="videocontrol">
       <source src="ArtwhosPromo 1.mp4" type="video/mp4">
     </video>
   </div>
   <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/hZaXulLqhp0?start=4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
   <!-- Réactiver en production -->
      <div id="newsletter">
        <span style="float: right;display: inline-block; text-decoration: none;color: white;cursor: pointer;border : 1px solid grey; border-radius: 20px;padding: 5px;background-color: #3b565f;width: 20px;height: 20px;text-align: center;" id="close"  onclick="fermer(event);">X</span>
        <img src="image/0U0A6150.jpg" style="width: 350px;height: 500px;float: left;display: block;">
        <div style="float: left;width: 350px;padding: 10px;height: 500px;box-sizing: border-box;">
          <h1 style="display: block;margin: auto;width: 80px">Artwhos</h1>
            <br>
             <h2>Notre site est en construction, retrouvez nous prochainement.</h2>
             <br>
             <h3>Welcome to Artwhos</h3>
             <h4>Site under construction, cooming soon.</h4>
            <div style="border-bottom: 2px solid lightgrey;width: 250px;margin:auto;"></div>
            <br>
            N'hésitez pas à souscrire à notre Newsletter afin d'être informé en exclusivité de nos nouvelles collections, nos défilés et de nos nouvelles actualités.
            <br>

            <form action="newsletter.php" method="post">
             <label for="email"><h3>Email</h3></label>
             <input type="text" name="news" style="border-bottom: 1px solid black; width: 300px ;display: inline-block;border-top:0;border-left:0;border-right:0;margin-top: -10px;" id="email">
             <div style="width: 100%;margin-top: 50px; ">
             <button style="float: left;color: white;background-color: #3b565f;">Inscription</button>
             <button style="float: right;color: white;background-color: #3b565f;" onclick="fermer(event);">Fermer</button>
             </form>
           </div>

           <!--<div id="newsletter" style="text-align: center;height: 200px;margin-top: 20px">
             <h1>BIENVENUE SUR LE SITE MANU REAS</h1>
             <h2>Notre site est en construction, retrouvez nous prochainement.</h2>
             <br>
             <h3>Welcome to Manu Reas</h3>
             <h4>Site under construction, cooming soon.</h4>
           </div>-->
        </div>
       
      </div>
    </div>

</body>
</html>
