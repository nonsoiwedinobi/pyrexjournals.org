<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Submit Manuscript to PJGMB" />
<meta property="og:description" content="Submit Resume to Pyrex Journal Of Genetics And Molecular Biology " />
<meta property="og:url" content="http://www.pyrexjournals.org/pjgmb/submit-resume.php" />
<meta property="og:site_name" content="Pyrex Journals" />
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="icon" href="../images/favicon.ico"  type="image/x-icon">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../scripts/slides.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Submit Resume </title>
<script>
  $(function() {

	$(".rslides").responsiveSlides({
	  auto: true,             // Boolean: Animate automatically, true or false
	  speed: 500,            // Integer: Speed of the transition, in milliseconds
	  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
	  pager: true,           // Boolean: Show pager, true or false
	  nav: false,             // Boolean: Show navigation, true or false
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
	  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
	  manualControls: "",     // Selector: Declare custom pager navigation
	  namespace: "rslides",   // String: Change the default namespace used
	  before: function(){},   // Function: Before callback
	  after: function(){}     // Function: After callback
	});

  });
</script>
</head>

<body>
	<div class="top-menu-container">
		<div class="sec-menu-container">
			<ul class="menu_ul">
				<li class="menu_li"><a  href="../index.php">HOME</a></li>
				<li class="menu_li"><a href="../about-us.php">ABOUT US</a></li>
				<li class="menu_li"><a href="../contact.php">CONTACT US</a></li>
				<li class="menu_li"><a href="../newsletter.php">NEWSLETTER</a></li>
			</ul>
	    </div>
					<div style="clear:both;"></div>

	</div>
	
	<div class="banner-container">
		<div class="logo-container">
			<img src="../images/logo.png" height="50" width="360"  />
		</div>
		
		<div class="search-container">
							<script>
  (function() {
    var cx = '003270060168523775784:c3yazeumaoo';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
		</div>
		
				   <div style="clear:both;"></div>
	</div>
	
	<div class="pri-menu-container">
			<ul class="menu-ul">
				<li class="menu-li"><a href="../journals.php">JOURNALS</a></li>
				<li class="menu-li"><a href="../authors-guide.php">GUIDE FOR AUTHORS</a></li>
				<li class="menu-li"><a href="../publication-ethics.php">PUBLICATION ETHICS</a></li>
			</ul>
	</div>
	
	<div class="slider_container">
				<ul class="rslides">
					<li><img src="../images/pjgmb.jpg" width="960" height="200" /></li>
				</ul>
	</div>

	<div class="main-body-wrapper">
		<div class="content-box-one">
			<div class="box-menu"><a class="listjornaled" href="index.php">Home | PJGMB</a></div>
			<div class="box-menu"><a  class="listjornaled" href="authors-guide.php">Guide for Authors</a></div>
			<div class="box-menu"><a  class="listjornaled" href="publication-ethics.php">Publication Ethics</a></div>
			<div class="box-menu"><a  class="listjornaled" href="call-for-papers.php">Call for Papers</a></div>
			<div class="box-menu"><a  class="listjornaled" href="submit-manuscripts.php">Submit Manuscripts</a></div>
			<div class="box-menu"><a  class="listjornaled" href="archive.php">Archive</a></div>
			<div class="box-menu"><a  class="listjornaled" href="editorial-board.php">Editorial Board</a></div>
			
			<br />
			<img  src="../images/cover-pjgmb.jpg" width="200" height="260" /></a>
			
			<a  class="front" href="submit-manuscripts.php">
				<h1 style="text-align:center;" class="box-header-blue">
					SUBMIT MANUSCRIPT
				</h1>
			</a>
			
		</div>
		
		
		
		
		<div class="content-box-two">
		
		
							
			<h1 style="font-size:20px;" class="box-header-blue">Submit Resume | PJGMB </h1>
			<br />
			<p>
			  Pyrex Journals is seeking energetic, qualified and high profile researchers to join its editorial team as editors, subeditors or reviewers. Kindly send your resume by using our online form below:
			</p>



<div><?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // Set the "To" email address
   $to="pjgmb@pyrexjournals.org";

	//Subject of the mail
   $subject="Editors/Reviewers with Resume attachment";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">";
	
	// Check for empty fields
   if(empty($_POST['name']) || empty($_POST['title']) || empty($_POST['institution']) || empty($_POST['specialisation']) || empty($_POST['address']) || empty($_POST['phone'])  || empty($_POST['email']) || empty($_POST['task']) || empty($_POST['message']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$title = $_POST['title'];
	$institution = $_POST['institution'];
	$address = $_POST['address'];
	$specialisation = $_POST['specialisation'];
	$phone = $_POST['phone'];
	$task = $_POST['task'];
	$message = $_POST['message'];

	// Check the email address
	if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}

   // Now Generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
   $message = "\n\n Title: $title \n\n Name: $name \n\n Institution: $institution \n\n Address: $address \n\n Email: $email_address \n\n Phone: $phone \n\n Specialisation: $specialisation \n\n Task: $task \n\nMessage: \n\n $message \n\nHere is your file: $file_name";

   // Check if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // Now we need to encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // Now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      if (@mail($to, $subject, $message, $headers))
	  {
         ?>
         <div><center><h1>Mail Sent successfully !!</h1></center></div>
         <?php
	  }else
	  {
         ?>
         <div><center>
           <h1>Error !! Unable to send Mail..</h1></center></div>
         <?php
	  }
   }
}
?></div>
<br />

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table style="color:#000000; font-size:14px; font-family:Georgia, 'Times New Roman', Times, serif;"  width="88%" border="0" align="center" cellpadding="2" cellspacing="0" class="toro">

<tr>
 <td width="20%"><label for="title">Title:</label> </td>
<td width="80%"><input name="title" type="text" id="title" size="60" /></td>
</tr>

 <tr>
 <td width="20%"><label for="name">Name:</label> </td>
<td width="80%"><input name="name" type="text" id="name" size="60" /></td>
</tr>

<tr>
 <td width="20%"><label for="institution">Institution:</label> </td>
<td width="80%"><input name="institution" type="text" id="institution" size="60" /></td>
</tr>

<tr>
 <td width="20%"><label for="address">Institution:</label> </td>
<td width="80%"><input name="address" type="text" id="address" size="60" /></td>
</tr>

<tr>
  <td><label for="email">Email:</label></td>
<td><input name="email" type="text" id="email" size="60" /></td>
 </tr>
 
 <tr>
 <td width="20%"><label for="phone">Phone:</label> </td>
<td width="80%"><input name="phone" type="text" id="phone" size="60" /></td>
</tr>

<tr>
 <td width="20%"><label for="specialisation">Specialisation:</label> </td>
<td width="80%"><input name="specialisation" type="text" id="specialisation" size="60" /></td>
</tr>

<tr>
 <td width="15%"><label for="task">Task:</label> </td>
<td width="85%"><input type="radio" name="task" value="1-2 articles" />I can conveniently review 1 - 2 article in a month<br>
				<input type="radio" name="task" value="2-4 articles" />I can conveniently review 2 � 4 articles in a month
</td>
</tr>
  
 <tr>
   <td ><label for="message">Comment:</label></td>
    <td><textarea cols="46" rows="5" name="message"></textarea></td>
 </tr>
 
 <tr>
   <td> <label for="tele">Upload Resume:</label> </td>
    <td><input id="tele" name="filename" type="file" /></td>
</tr>
  
<tr>
<td>&nbsp;</td>
<td><input class="formbtn" type="submit" value="Submit document" /></td>
</tr>
</table>
</form>

	<br />
	<br />
		
		</div>
	
	
						<div style="clear:both;"></div>
						
		<hr style="color:#F7F7F7;" />
		<p style="text-align:center; color:#333333;font-size:13px;">
		&copy; 2015 - Pyrex Journals | <span><a style="color:#003366;" class="listjornal" href="../terms.php">Terms</a></span> | <span><a style="color:#003366;" class="listjornal" href="../policy.php">Privacy policy</a></span>
		</p>
		<br />
		<br />
	</div>

</body>
</html>
