<?php 
 switch ($_GET['page']) {
	case null:
		$content = 'templates/content_front.php';
		$submenu = NULL;
		break;
	default:
		$content = 'templates/content_front.php';
		$submenu = NULL;
		break;
	
	case 'portfolio':
		$content = 'templates/content_portfolio.php';
		$active1 = ' active';
		$submenu = 'portfolio';
		break;
	case 'book_design':
		$content = 'templates/content_book.php';
		$active1 = ' active';
		$active1a = ' active';
		$submenu = 'portfolio';
		break;
	case 'newspaper_magazine_design':
		$content = 'templates/content_newspaper-mag.php';
		$active1 = ' active';
		$active1c = ' active';
		$submenu = 'portfolio';
		break;
	case 'web_development':
		$content = 'templates/content_web.php';
		$active1 = ' active';
		$active1b = ' active';
		$submenu = 'portfolio';
		break;
	case 'identity':
		$content = 'templates/content_identity.php';
		$active1 = ' active';
		$active1d = ' active';
		$submenu = 'portfolio';
		break;
	case 'illustration':
		$content = 'templates/content_illustration.php';
		$active1 = ' active';
		$active1e = ' active';
		$submenu = 'portfolio';
		break;
	case 'other_work':
		$content = 'templates/content_other.php';
		$active1 = ' active';
		$active1f = ' active';
		$submenu = 'portfolio';
		break;
		
	case 'about_me':
		$content = 'templates/content_about.php';
		$active2 = ' active';
		break;
	
	case 'contact':
		$content = 'templates/content_contact.php';
		$active3 = ' active';
		$submenu = 'contact';
		break;
		
	case 'store':
		$content = 'templates/content_store.php';
		$active5 = ' active';
		break;
		
	case 'order_canceled':
		$content = 'templates/content_store_cancel.php';
		$active5 = ' active';
		break;
	
	case 'order_success':
		$content = 'templates/content_store_success.php';
		$active5 = ' active';
		break;
	
}
?>
<?php include ('templates/page_header.php'); ?>
<div id="bd" role="main">
	<div id="yui-main">
	<div class="yui-b">
	
<?php include ($content);?>		

	</div> <!-- end yui-b -->
</div> <!-- end yui-main -->


</div> <!-- end bd -->
	<div id="ft">
	</div> <!-- end ft -->
	
</div> <!-- end doc -->



</body>
</html>
