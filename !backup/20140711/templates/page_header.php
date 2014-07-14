<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>Penciled In Designs</title>
   <link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
   <link rel="stylesheet" href="penciledin.css" type="text/css">
   
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" href="js/dhonishow/dhonishow.css" type="text/css" media="screen" />
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="js/dhonishow/jquery.dhonishow.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="//use.typekit.net/jny2dwk.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
   <?php /*<script type="text/Javascript" src="js/scripts-replacement.js"></script> */ ?>
</head>

<body>
<div id="logo">
<a id="header_logo" href="index.php"><i>Penciled In Designs. The work of Benjamin Lawless</i></a>
</div> <!-- end logo -->
	<div id="header_dark">
	<div class="header_menu">
		<a id="portfolio" class="<?php echo $active1;?>" href="?page=book_design"><i>Portfolio</i></a>
		<a id="about_me" class="<?php echo $active2;?>" href="?page=about_me"><i>About Me</i></a>
		<a id="contact" class="<?php echo $active3;?>" href="?page=contact"><i>Contact</i></a>
		<a id="daily_life" class="<?php echo $active4;?>" href="/wp/"><i>Daily Life</i></a>
		<a id="store" class="<?php echo $active5;?>" href="?page=store"><i>Store</i></a>
	</div> <!-- end header_menu -->
	</div> <!-- end header_dark -->

<div id="doc" class="yui-t7">
	<div id="hd" class="<?php if (isset($submenu)) echo 'submenu';?>">
	

<?php if ($submenu == 'portfolio') { ?>
	<ul id="header_submenu">
		<img class="arrow portfolio" src="images/header_subarrow.png" />
		<li><a class="<?php echo $active1a;?>" href="?page=book_design">Book Design</a></li>
		<li><a class="<?php echo $active1b;?>" href="?page=web_development">Web Development</a></li>
		<li><a class="<?php echo $active1c;?>" href="?page=newspaper_magazine_design">Newspaper &amp; Magazine Design</a></li>
		<li><a class="<?php echo $active1d;?>" href="?page=identity">Identity</a></li>
		<li><a class="<?php echo $active1e;?>" href="?page=illustration">Illustration</a></li>
		<!-- <li><a class="<?php echo $active1f;?>" href="?page=other_work">Other Work</a></li> -->
	</ul> <!-- end header_submenu -->
<?php }else if ($submenu == 'contact') { ?>
	<ul id="header_submenu">
		<img class="arrow contact" src="images/header_subarrow.png" />
		<li>Find me on:</li>
		<li><a id="facebook" href="http://www.facebook.com/people/Ben-Lawless/6403972" target="_blank">Facebook</a></li>
		<li><a id="flickr" href="http://www.flickr.com/photos/penciledin/">flickr</a></li>
		<li><a id="delicious" href="http://delicious.com/penciledin" target="_blank">Delicious</a></li>
		<li><a id="rdio" href="http://www.rdio.com/#/people/penciledin/">rdio</a></li>
		<li><a id="deviantart" href="http://penciledin.deviantart.com">deviantART</a></li>
	</ul>
<?php } ?>
	</div> <!-- end hd -->

