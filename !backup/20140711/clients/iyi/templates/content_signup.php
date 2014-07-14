<?php 
if (isset($_POST['zipFront'])) { $zipFront = $_POST['zipFront']; } else {}
?>

<div class="yui-g">
<div class="yui-u first">
<h1>Sign Up</h1>
<form id="signupFull" action="?page=logged_in" method="POST">
  <ul>
  <li>
  <label for="zip">Zip Code <span class="required">*</span></label>
  <input value="<?php if ($zipFront) { echo $zipFront; } else { echo ''; } ?>" name="zip" id="zip"  onblur="replaceText(this)">
  </li>
  <li>
  <label for="username">Username <span class="required">*</span></label> 
  <input name="username" id="username" onblur="replaceText(this)"> 
  </li>
  <li>
  <label for="email">Email Address <span class="required">*</span></label> 
  <input name="email" id="email" value="" onblur="replaceText(this)"> 
  </li>
  <li>
  <label for="nameFirst">First Name</label> 
  <input name="nameFirst" id="nameFirst" onblur="replaceText(this)"> 
  </li>
  <li>
  <label for="nameLast">Last Name</label> 
  <input name="nameLast" id="nameLast" onblur="replaceText(this)"> 
  </li>
  <li>
  <label for="age">Age</label>
  <input name="age" id="age" onblur="replaceText(this)">
  </li>
  <li>
    <label for="gender">Gender</label>
    <div class="radio">
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="decline"> Decline to State
    </div>
  </li>
  <li>
  <label for="income">Income Level</label>
  <select name="income" id="income">
    <option>Please choose one...</option>
    <option value="1">Less than $9,999</option>
    <option value="2">$10,000 - $14,999</option>
    <option value="3">$15,000 - $24,999</option>
    <option value="4">$25,000 - $34,999</option>
    <option value="5">$35,000 - $49,999</option>
    <option value="6">$50,000 - $74,999</option>
    <option value="7">$75,000 - $99,999</option>
    <option value="8">$100,000 - $149,999</option>
    <option value="9">$150,000 - $199,999</option>
    <option value="10">$200,000 and above</option>
  </select>
  </li>
<button type="submit" name="submit" class="register"><i>Register</i></button>
</form>

</div> <!-- end yui-u -->
<div class ="yui-u">
<h1>You can make a difference. We can help.</h1>
<p>Sign up to the left for your chance. Entering in your zip code gives you access to your city, county, district and state issues.</p>
</div> <!-- end yui-u -->
</div><!-- end yui-g -->