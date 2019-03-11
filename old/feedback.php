<!DOCTYPE html>
<html>
<head>
	<title>Creating Futures - Feedback</title>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='css\styles.css' />
</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%">
  <tr>
	<td width="50%" background="images/bg.gif"><img src="images/px1.gif" width="1" height="1" alt="" border="0"></td>
	<td valign="bottom" background="images/bg_left.gif"><img src="images/bg_left.gif" alt="" width="17" height="16" border="0"></td>
	<td>
		<table border="0" cellspacing="0" cellpadding="0" width="780">
			<tr><td><img src="images/logohd.jpg" width="780" height="110" alt="" border="0"><td></tr>		
			<tr><td>
				<div id='cssmenu'>
				<ul>
				<li><a href='index.html'><span>Home</span></a></li>
				<li><a href='aboutus.html'><span>About Us</span></a></li>
				<li><a href='partnership.html'><span>PartnerShip</span></a></li>
				<li><a href='volunteer.html'><span>Volunteer</span></a></li>
				<li><a href='contact.html'><span>Contact</span></a></li>
				<li class='active'><a href='feedback.html'><span>Feedback</span></a></li>
				</ul>
				</div>
			</td></tr>
			<tr bgcolor="#666666" height="1"><td></td></tr>	
			<tr><td height="465">
				<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%" bgcolor="#FFE4C4">
					<tr>
						<td style="vertical-align:top:height:100px" colspan="3">
							<p class="para"><span class="subHeading">Feedback</span></p>						
						<td>
					</tr>
					<tr style="vertical-align:top;">
						<td width="30px"></td>
						<td style="vertical-align:top;height:150px">
<?php
 if(isset($_POST['user_email'])) {     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@creatingfutures.in";
 
    $email_subject = "Feedback Form";     
 
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
 
        !isset($_POST['user_email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');     
		
    }
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['user_email']; // required
  
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
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n\n";
  
    $email_message .= "Comments: ".clean_string($comments)."\n\n";
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
<!-- include your own success html here -->
 
<p class="para">Thank you for contacting us. We will be in touch with you very soon.</p>
 
<?php
 
}
?>

						</td>
						<td>
							<img src="images\mouse.jpg">
						</td>
					</tr>	
					<tr>
						<td colspan="3" style="vertical-align:top;height:215px">						
						</td>
					</tr>				
				</table>			
			</td></tr>
			<tr bgcolor="#666666" height="1"><td></td></tr>		
			<tr><td><p style="font-size: 10px;" align="center">Copyright &copy;2014 Creating Futures. All Right Reserved.</p></td></tr>	
			<tr bgcolor="#666666" height="1"><td></td></tr>		
		</table>		
	</td>
	<td valign="bottom" background="images/bg_right.gif"><img src="images/bg_right.gif" alt="" width="17" height="16" border="0"></td>
	<td width="50%" background="images/bg.gif"><img src="images/px1.gif" width="1" height="1" alt="" border="0"></td>
</tr>
</table>

</body>
</html>