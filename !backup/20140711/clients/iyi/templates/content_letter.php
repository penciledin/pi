<?php 
$representative = "Lois Capps";
?>

<?php 
	if ($_GET['slant'] == 'for_kennedy') {
		$letter = 'templates/letter_tedkennedy_for.php';
		$subject = "We must pass Ted Kennedy's health care plan!";
	}
	if ($_GET['slant'] == 'against_kennedy') {
		$letter = 'templates/letter_tedkennedy_against.php';
		$subject = "That guy is crazy!";
	}
	if ($_GET['slant'] == 'for_giant') {
		$letter = 'templates/letter_jointogether_for.php';
		$subject = "Join together";
	}
	if ($_GET['slant'] == 'against_giant') {
		$letter = 'templates/letter_jointogether_against.php';
		$subject = "No way";
	}
?>
<div class="yui-gc">
	<div class="yui-u first">
	<form class="letter" method="POST" action="?page=success">
	<h2>Representative: <?php echo $representative; ?></h2>
	<p>1411 Marsh Street, Suite 205<br />
San Luis Obispo, CA 93401<br />
Phone: (805) 546-8348<br />
Fax: (805) 546-8368<br />
Email: <a href="#">lois.capps@house.gov</a></p>
<p><input class="checkbox" type="checkbox" checked /> Send via email<br />
<input class="checkbox" type="checkbox" /> Send via fax</p>
	
	<label for="subject">Subject</label>
<input type="text" id="subject" name="subject" value="<?php echo $subject;?>" />
<label for="body">Letter</label>
<textarea id="body" name="body">

<?php include ($letter); ?>

</textarea>

<p>Sincerely,</p>
<p><input type="text" id="signature" name="signature" value="Your Name Here" onfocus="clearText(this);" onblur="replaceText(this)" /></p>

	<p><input class="checkbox" type="checkbox" checked /> Send a copy to my email</p>
	
	<div class="recipients">
		
		<div class="media">
			<h2>Send to the Media</h2>
			<div class="left">
				<h3>Local News Media</h3>
				<ul>
					<li><input class="checkbox" type="checkbox" /><a href="#">San Luis Obispo Tribune</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">KVEC AM 920</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">Cal Poly Mustang Daily</a></li>
				</ul>
				<h3>Local Entertainment Media</h3>
				<ul>
					<li><input class="checkbox" type="checkbox" /><a href="#">KSBY TV 6</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">New Times San Luis Obispo</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">HopeDance Magazine</a></li>
				</ul>
			</div> <!-- end left -->
			<div class="right">
				<h3>National News Media</h3>
				<ul>
					<li><input class="checkbox" type="checkbox" /><a href="#">FOX News</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">New York Times</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">Los Angeles Times</a></li>
					<li><input class="checkbox" type="checkbox" /><a href="#">USA Today</a></li>
				</ul>
			</div> <!-- end right -->
					
		</div> <!-- end media -->
	</div> <!-- end recipients -->
	<button type="submit" name="submit" class="send"><i>Send</i></button>
	</form>
	</div> <!-- end first -->
	
	<div class="yui-u">
		<h2>Help</h2>
		<p>Rewrite the letter to the left to suit your needs. Then, fill out your name in the "Sincerely" field and click the Send button. We'll handle delivering the letter via email.</p>
	</div> <!-- end yui-u -->
</div> <!-- end yui-gc -->