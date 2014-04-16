<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "irishbaubles@gmail.com";
    $email_subject = "Irish Baubles - Feedback";
     
header('Refresh: 6; URL=http://www.irishbaubles.com');

    function died($error) {
        // your error code can go here
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
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Irish Baubles | Irelands Christmas Decorations | Thank You | Feedback |</title>

<!-- Dreamweaver Fluidgrid Layout Settings-->
<link href="../boilerplate.css" rel="stylesheet" type="text/css">

<!-- Your styles -->
<link href="../externalFiles/css/fluidgridlayout.css" rel="stylesheet" type="text/css">

<!-- Hong Kiat-->
<!-- http://www.hongkiat.com/blog/responsive-web-nav -->
	<link href="../externalFiles/css/hongstyle.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<script src="../externalFiles/css/respond.min.js"></script>
	<script src="../externalFiles/js/respond.js"></script>
	<script src="../externalFiles/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">	</script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>  
	

</head>

<body>

<div class="gridContainer clearfix">

<a href="#mainarea" class="skip">Skip navigation</a>

	<nav class="clearfix"> 
    	<ul class="clearfix"> 
        	<li><a href="../home/home.html">Home</a></li> 
        	<li><a href="../shop/shop.html">Shop</a></li>
			<li><a href="../gallery/gallery.html">Gallery</a></li>
			<li><a href="../news/news.html">News</a></li>
			<li><a href="../business/business.html">Business</a></li>
			<li><a href="../events/weddings.html">Weddings</a></li>
            <li><a href="../facebook/facebook.html">Facebook</a></li>
			<li><a href="../twitter/twitter.html">Twitter</a></li>
			<li class="nav-current"><a href="contact.html">Contact</a></li>
        </ul>  
    	<a href="#" id="pull">Menu</a>  
	</nav>
    
<div id="wrap">


  <div id="header">
  		<a href="../index.html">
		<img src="../images/Logo.png" alt="Site Logo" />
    	</a>
  </div>
  
  <div id="main">
  
    
<div id="mainarea">
	<div id="topbody">
		<hr />
  			<h1>Contact Us</h1>
    			<hr />
    				<hr />
    					<br />
                        <div class="push"></div>
                        
                        <p>Telephone: 00353857133711</p><p>Email:<a href="mailto:irishbaubles@gmail.com?Subject=Irish%20Baubles%20Business">irishbaubles@gmail.com</a></p>
                        	<br />
                        <div class="push"></div>
           	
        					<hr />
			<h3 id="index">Thank you for contacting us. We will be in touch with you very soon.
  <?php
}
?>
</h3>
            				<hr />
            

<br />

<div class="push"></div>
<div class="push"></div>
      
  </div>	<!-- End of Topbody-->
</div>	<!-- End of Mainarea-->                

</div>  <!-- End of Main-->
    
    
   
</div>  <!-- End of Wrap-->              

  <div id="footer">
		<h1>A bauble for every occasion</h1>
	</div>

 
  <!-- End of gridContainer-->  
</div>

</body>
</html>
