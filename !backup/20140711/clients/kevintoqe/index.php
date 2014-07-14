<?php 
switch ($_GET['page']) {
	default:
		$content = 'templates/content_home.php';
		$title = 'Home: ';
		break;
	case "NULL":
		$content = 'templates/content_home.php';
		$title = 'Home: ';
		break;
	case 'bio':
		$content = 'templates/content_bio.php';
		$title = 'Biography: ';
		$active1 = ' active';
		break;
	case 'shows':
		$content = 'templates/content_shows.php';
		$title = 'Shows: ';
		$active2 = ' active';
		break;
	case 'music':
		$content = 'templates/content_music.php';
		$title = 'Music: ';
		$active3 = ' active';
		break;
	case 'contact':
		$content = 'templates/content_contact.php';
		$title = 'Contact: ';
		$active4 = ' active';
		break;
	
}
?>

<?php include('templates/page_header.php'); ?>

<div id="container">
	<?php include ($content); ?>
</div> <!-- end container -->

<?php include ('templates/page_footer.php'); ?>