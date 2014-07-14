<div class="yui-g">
	<div class="yui-u first">
	<h4><a href="?page=issue">Health Care Reform ></a></h4>
		<?php if ($_GET['article']=='kennedy') { 
			include ('templates/article_letsPassTedKennedys.php');
			$article = 'ted';
		} elseif ($_GET['article']=='giant') {
			include ('templates/article_weMustJoinTogether.php');
			$article = 'giant';
		} else {
			?>

		<h1>Article Title</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum urna ut nulla varius convallis. Curabitur vehicula faucibus dolor et vehicula. Nulla facilisi. Cras pulvinar, dolor non convallis tempor, augue odio adipiscing urna, ac pharetra tortor nisi quis elit. Suspendisse sit amet libero in libero fringilla condimentum in et neque. Etiam feugiat, metus eget dapibus vehicula, elit justo rutrum libero, rutrum placerat dui dui a lorem. Suspendisse ac augue vel erat laoreet rutrum a a velit. Vestibulum mattis dictum sapien eu rhoncus. Nam ultrices, lorem volutpat posuere porttitor, orci nisi pulvinar magna, eu accumsan nisl odio et tellus. Nam viverra molestie risus ut gravida. Aliquam erat volutpat. Sed accumsan quam at tellus venenatis aliquam. Sed faucibus, velit ac vestibulum tristique, eros ante viverra neque, ac hendrerit leo turpis in risus. Pellentesque eu felis et urna ornare posuere in vel felis. Maecenas convallis dapibus nisi, quis molestie tortor ultrices nec. Suspendisse sagittis massa eu risus tempor volutpat lobortis neque porttitor. Sed sodales nisl ac augue pretium venenatis. Nam et nunc nisl, sed cursus nunc.</p>

<p>Nulla facilisi. Donec a vulputate tellus. Suspendisse fringilla mi ac dolor malesuada aliquet. Nulla quis risus vitae justo viverra semper. Nullam iaculis varius facilisis. Vestibulum velit neque, ullamcorper nec venenatis sed, vestibulum bibendum turpis. Nullam quis bibendum eros. Ut est tortor, commodo nec vestibulum vel, pulvinar eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum eu ligula mi. Maecenas libero tortor, faucibus in eleifend in, tincidunt vitae justo. Donec at erat et sapien vehicula pulvinar a at purus. Mauris dignissim molestie suscipit. Cras sit amet mi lorem. Vivamus vel elit elit, non ullamcorper ligula.</p>

<p>In lacus quam, hendrerit non pretium at, sollicitudin a nibh. Sed quis velit massa, fringilla lacinia massa. Curabitur at magna sapien. Phasellus dolor lorem, blandit eu laoreet id, cursus in libero. Aliquam erat volutpat. Praesent neque velit, tempus id pellentesque et, feugiat sed urna. Nunc ultricies felis sit amet nulla rutrum sed iaculis tortor suscipit. Vestibulum id odio quis odio aliquam viverra. Maecenas tempus elit quis justo scelerisque ultrices. Donec dui turpis, euismod quis vulputate a, sollicitudin eget justo. Nullam auctor massa eget metus sollicitudin convallis. Nullam nunc ante, vulputate vel blandit et, ullamcorper vitae sem. Etiam posuere libero nec nisl posuere lacinia. Maecenas tellus dolor, ornare et venenatis in, iaculis quis purus. Praesent pellentesque massa nec nulla tristique pellentesque dapibus nisi ullamcorper. Sed et est ut risus gravida ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet est lacus. Morbi pretium scelerisque feugiat.</p>

<p>Mauris non blandit lectus. Nullam nec felis eget neque bibendum mollis. Donec at arcu enim, et aliquet orci. Pellentesque consequat dignissim nisl quis malesuada. Vestibulum nisi nunc, facilisis vel lobortis vel, pulvinar at mi. Nunc vestibulum sodales eros sit amet pretium. Integer molestie pharetra feugiat. Maecenas viverra porttitor orci, id sollicitudin nulla tempus a. Donec mauris nibh, ornare sit amet tristique sit amet, volutpat eget est. Proin porta neque vitae nunc pulvinar pellentesque. Fusce lobortis nunc in lorem pellentesque ultrices.</p>

<p>Sed tempus quam massa. Fusce nisi nisi, sodales vitae pharetra a, elementum et neque. In hac habitasse platea dictumst. Aenean porta, magna sit amet viverra fringilla, nunc massa commodo augue, non semper enim ipsum at augue. In et nunc erat. Pellentesque ultricies eros ut odio vulputate aliquam. Donec mollis malesuada lectus, non consequat felis condimentum id. Suspendisse elementum convallis sodales. Nulla aliquam auctor porttitor. Vestibulum elementum, nulla eget euismod commodo, risus sem lacinia magna, id semper massa justo vitae sem. Donec posuere arcu vel urna ornare viverra. Fusce neque dolor, vestibulum sit amet condimentum id, mattis sed metus. Praesent felis metus, vestibulum sed euismod sed, condimentum in lacus. Nunc interdum tincidunt justo eget vestibulum. In imperdiet lacus vitae dolor euismod consectetur. Nam at odio purus, eget semper leo. Morbi venenatis pretium lacus, ut gravida tortor malesuada id. Cras vestibulum tincidunt congue. </p>
<?php } ?>
	</div> <!-- end yui-u first -->
	
	<div class="yui-u">
		<div class="yui-g articleSidebar">
			<div class="yui-u first letters">
				<h2>Representative</h2>
				<h3>Lois Capps</h3>
				<p>1411 Marsh Street, Suite 205<br />
San Luis Obispo, CA 93401<br />
Phone: (805) 546-8348<br />
Fax: (805) 546-8368<br />
<a href="http://www.house.gov/capps/">Website</a></p>
				<h2>Letters</h2>
				<ul>
					<li><a href="?page=letter&slant=for_<?php echo $_GET['article']; ?>">I agree with this article</a></li>
					<li><a href="?page=letter&slant=against_<?php echo $_GET['article']; ?>">I do not agree with this article</a></li>
				</ul>
				<p>Click one of the links above to access a letter you can edit and email to your representative and to the media.</p>
				<!-- <h2>Related Articles</h2> -->
			</div> <!-- end letters -->
			<div class="yui-u ad">
			<img src="images/160x600.gif" alt="160x600" width="" height=""/>
				
			</div> <!-- end ad -->
		</div> <!-- end yui-g -->
	</div> <!-- end yui-u -->

</div> <!-- end yui-g -->