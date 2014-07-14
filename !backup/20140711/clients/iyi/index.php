<?php 

switch ($_GET['page']) {
  case 'default':
    $content = "templates/content_front.php";
    $home = TRUE;
    break;
  case NULL:
    $content = "templates/content_front.php";
    $home = TRUE;
    break;
  case 'about':
    $content = "templates/content_about.php";
    break;
  case 'explore':
  	$content = "templates/content_explore.php";
  	break;
  case 'be_a_contributor':
    $content = "templates/content_contributor.php";
    break;
  case 'keep_the_media_honest':
    $content = "templates/content_media.php";
    break;  
  case 'login':
    $content = "templates/content_login.php";
    break;
  case 'signup':
    $content = "templates/content_signup.php";
    break;
  case 'issue':
    $content = "templates/content_issue.php";
    break;  
  case 'article':
    $content = "templates/content_article.php";
    break;  
  case 'letter':
    $content = "templates/content_letter.php";
    break;
  case 'logged_in':
  	$content = "templates/content_loggedin.php";
  	$logged_in = TRUE;
  	$home = TRUE;
  	break;
  case 'logout':
    $content = "templates/content_logout.php";
    $log_out = TRUE;
    break;
  case 'success':
  	$content = "templates/content_success.php";
  	break;
} 
?>


<?php include ("templates/page_header.php"); ?>
  
<?php include ($content); ?>

<?php include ('templates/page_footer.php'); ?>
