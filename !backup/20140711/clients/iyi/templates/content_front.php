<div class="yui-g">
    <div class="yui-u first">
	
	<?php include('templates/page_legend.php'); ?>
    
	<ul class="upcomingIssues">
	<h1>Urgent Issues</h1>
	<li><h2><a href="?page=article&article=giant">We Must Join Together With the Awakened Giant</a> <img src="images/icon_redButton2.png" alt="Hot Button Issue" /> <img src="images/icon_porkBarrel.png" alt="Pork Barrel Issue" /></h2>
		<p>We need to return the unspent stimulus 
funds, and lower our debt.  We need to lower taxes on small businesses 
so they can start hiring workers again and thus rebuild our capitalist 
marketplace.  We need to stop all the give-away programs to those 
too lazy to work, and we need to change welfare to workfare, so that 
people will be motivated enough to attend government classes to learn 
skills that will help them earn more and feel like a worthwhile, productive 
citizen. <a href="?page=article&article=1">Read More</a></p></li>
</ul> <!-- end upcomingIssues -->

	
<ul class="listIssues">
<h1>Other Issues</h1>
	<li><a href="?page=issue">Constitutional issues</a></li>
	<ul>
    <li><a href="?page=issue">Second Amendment Rights</a></li>
    <li><a href="?page=issue">Free speech rights</a></li>
    <li><a href="?page=issue">More Issues...</a></li>
  </ul>
	<li><a href="?page=issue">Social Issues</a></li>
	<ul>
    <li><a href="?page=issue">Religious Issues
    <li><a href="?page=issue">Live Issues
    <li><a href="?page=issue">More Issues...</a></li>
  </ul>
	<li><a href="?page=issue">Economic Issues</a></li>
	<ul>
    <li><a href="?page=issue">Taxes</a></li>
    <li><a href="?page=issue">Spending</a></li>
    <li><a href="?page=issue">Unions</a></li>
    <li><a href="?page=issue">More Issues...</a></li>
  </ul>
	<li><a href="?page=issue">Foreign Policy Issues</a></li>
	<li><a href="?page=issue">Environmental Issues</a></li>
	<li><a href="?page=issue">Recreational Issues</a></li>
	<li><a href="?page=issue">Health Care Issues</a></li>
	<li><a href="?page=issue">Border Issues</a></li>
</ul> <!-- end listIssues -->
	
</div> <!-- end yui-u first -->

<div class="yui-u">
		<h1>What is your zip code?</h1>
		
		<form id="homeLocation" method="POST" action="?page=signup">
		<p>Entering your location lets you access city, county, district and state issues.</p>
		<input type="text" name="zipFront" id="zipFront" value="Example: 93401" onfocus="clearText(this);" onblur="replaceText(this)" /> 
		<button type="submit" name="submit" class="register"><i>Register</i></button>
		</form>
		<h1>Login</h1>
		<form id="homeLogin" action="login.php" method="POST">
		<input type="text" id="user" value="Username" onfocus="clearText(this);" onblur="replaceText(this)" />
		<input type="text" id="pass" value="Password" onfocus="clearText(this);" onblur="replaceText(this)" />
		<button type="submit" name="submit" class="login"><i>Log In</i></button>
		</form>

<img class="adMid" src="images/300x600example.gif" />

	</div> <!-- end yui-u -->
</div> <!-- end yui-g -->