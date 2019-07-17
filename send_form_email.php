<!DOCTYPE html>
<html class="not-ie no-js">  
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Send Email</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" type="text/css" rel="stylesheet" media="screen">
		<script src="js/modernizr.js"></script>
		<script src="js/respond.js"></script>
	</head>
	<body>
		<div class="container" id="wrapper">
			<header>
				<a href="index-2.html" class="logo">
					<img src="images/logo.png" alt="" />
				</a>
				<nav role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa">&#xf0c9;</span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li class="active"><a href="register.php">register</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li class="has-children"><a>Menu</a>
								<ul class="children">
									<li><a href="Babysitter.html">Babysitter</a></li>
									<li><a href="working.html">Working</a></li>
									<li><a href="LogIn.html">LogIn Manager</a></li>
								</ul>
						</ul>
					</div>
					<div id="sun"></div>
				</nav>
				<div class="clearfix"></div>
			</header>
			<section id="content" class="col-lg-7 col-md-8 col-sm-12">
				<div class="cloud">
					<h1>Contact</h1>
				</div>
				<div class="content-bg">
					<h2 class="entry-title post-title">Stauts Message</h2>
					<div class="container">
							<div class="col-lg-12 well">
							<div class="row">
              <?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "masritamer@gmail.com";
    $email_subject = "Contact From Kindergarten";
 
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
  Thank you for contacting us.<br>
   We will Contact You as soon.

 
<?php
 
}
?>


							</div>
							</div>
			</section>
			<div class="clearfix"></div>
		</div>
		<footer>
				<div class="footer-menu">
					<div class="container">
						<div class="col-lg-6 col-md-6 col-sm- fa social-media">
							<a href="mailto:masritamer@gmail.com"><img src="images/google.png" alt="google" title="google">
							<a target= "_blank" href="#"><img src="images/linkedin.png" alt="link" title="linkedIn"></a>
							<a target= "_blank" href="#"><img src="images/twitter.png" alt="link" title="twitter"></a>
							<a target= "_blank" href="#"><img src="images/youtube.png" alt="link" title="youtube"></a>
							<a target= "_blank" href="https://www.facebook.com/tamer.masri.94"><img src="images/facebook.png" alt="faceBook" title="faceBook"></a>
						</div>
						<div class="footer-links">
							<p>
							Herzel 18, Rmat Gan &nbsp&nbsp
							<img src="images/phone.png" alt="link" title="phone">&nbsp03-3652145
							</p>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="col-lg-12 col-md-12">&copy; Tamer Masri 2019</div>
					</div>
				</div>
			</footer>
		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
	</body>
</html>