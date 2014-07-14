<html>
<head>
   <title>It's Your Issue</title>
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="http://www.itsyourissue.com/blue.css" type="text/css">
   <script language="javascript" type="text/javascript" src="http://www.itsyourissue.com/iyi.js"></script>
   
</head>
<body>
<div id="container">
<div id="doc2" class="yui-t7">
   <div id="hd" role="banner" <?php if (isset($home)) { echo 'class="home"'; }?>>
   <?php if ((isset($_COOKIE['loggedIn']))) { ?>
   <a href="?page=logged_in" id="logo"><i>It's Your Issue</i></a>
   <?php }else { ?>          	
   <a href="?" id="logo"><i>It's Your Issue</i></a>
   <?php } ?>
   
   <div id="menu" <?php if (isset($_COOKIE['loggedIn'])) || ($_GET['page']=='logged_in')) { echo 'class="loggedIn"'; } elseif ($_GET['page']=='logout') { echo 'class="loggedOut"'; } ?> 
   >
   
    <a id="about" href="?page=about"><i>About This Site</i></a>
    <a id="explore" href="?page=explore"><i>Explore</i></a>
    <a id="contribute" href="?page=be_a_contributor"><i>Be a Contributor</i></a>
    <a id="media" href="?page=keep_the_media_honest"><i>Keep the Media Honest</i></a>
    <?php if (isset($_COOKIE['loggedIn'])) { ?><a id="logout" href="logout.php"><i>Log Out</i></a> <?php } else { ?>
    <a id="login" href="?page=login"><i>Log In</i></a>
    <a id="signup" href="?page=signup"><i>Sign Up</i></a><?php } ?>
  </div> <!-- end menu -->
  
  <img class="adTopLeaderboard" src="images/726X90_v2.gif" />

<?php if ((isset($_COOKIE['loggedIn'])) || ($_GET['page']=='logged_in')) { ?>
	<div id="userInfo">
		<span class="welcome">Welcome back!</span>
		<span class="unread">0 unread messages</span>
		<span class="viewLetters"><a href="#">View your letters</a></span>
		<span class="zip">Zip: <a href="#">93401</a></span>		
		<span class="preferences"><a href="#">Preferences</a></span>
	</div> <!-- end userInfo -->
<?php } ?>

  <?php if (isset($home)) { ?>
   <div id="parchment">
   <h1 id="tagline">Connecting citizens to their leaders</h1>
   <p class="hidden">We are dedicated to the American principles of our founding fathers and the historical purpose of our Constitution. Our mission is to enlighten voters about those principles and empower them to compel their representatives to work for the people.</p>
   <p><a id="learnMore" href="?page=about"><i>Click to learn more.</i></a></p>
   </div> <!-- end parchment -->
   <?php } ?>
   
   
   
   </div>
   <div id="bd" role="main">
	<div id="yui-main">
	<div class="yui-b">

