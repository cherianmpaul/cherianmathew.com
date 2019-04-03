<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>CherianMathew.com - Email Request</title>
<meta name="description" content="Request my emai address" />
<meta name="keywords" content="Email Request" />
<meta name="designer" content="My Arts Desire/Round the Bend Wizards" />
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="false" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div class="wrapper">
<table>
<tbody>
<tr>
<td colspan="2" class="sitename">
<!--webbot bot="Include" U-Include="include_sitename.htm" TAG="BODY" startspan -->

Web Presence of Cherian Mathew
<!--webbot bot="Include" i-checksum="34543" endspan --></td>
</tr>
<tr>
<td colspan="2"><img src="images/mainimage.jpg" alt="main image" /></td>
</tr>
<tr>
<td><img src="images/shadowleft.jpg" alt="shadow" /></td>
<td><img src="images/shadowright.jpg" alt="shadow" /></td>
</tr>
<tr>
<td class="sidebar">
<h4>Site Menu:</h4>
<!--webbot bot="Include" u-include="include_mainnavigation.htm" tag="BODY" startspan -->
<div class="sidebarnav">
<ul>
<li><a href="home.php">Home Page</a></li>
<li><a href="aboutme.htm">About Me</a> </li>
<li><a href="interests.htm">Interests</a> </li>
<li><a href="photo.php">Photo Album</a> </li>
<li><a href="favorites.htm">Favorites</a> </li>
<li><a href="feedback.php">Feed Back</a></li>
<li><a href="chat.htm">Chat</a></li>
<li><a href="guestbook.php">Guest Book</a></li>
<li><a href="searchme.htm">Search</a></li>
<li><a href="contact.htm">Contact Me</a></li>
</ul>
</div>
<!--webbot bot="Include" i-checksum="26609" endspan --><p>
<img src="images/hrshort.jpg" alt="horizontal bar" /></p>
<h4>Need Help Fast?</h4>
<p><a href="faq.htm">Visit my FAQs.</a> I have easy 
answers to the questions you ask the most.</p>
</td>
<td class="maintext">
<?php 
  If ($_POST["my_FirstName"]<>"" and $_POST["my_Email"]<>"") {
   
$to = $_POST["my_Email"];
$subject =  "Email from cherianmathew.com";
$from = "cherian@cherianmathew.com"; 
$headers = "From:" . $from;
     
$message = "Dear " . $_POST["my_FirstName"] . "\n" . "\n";  
$message = $message . "This message is sent from cherianmathew.com." . "\n" . "\n";  
$message = $message . $_POST["my_FirstName"] . " has requested my email address." . "\n" . "\n";  
$message = $message . "If you are not " . $_POST["my_FirstName"] . ",  Please delete this message" . "\n" . "\n";  
$message = $message . "My email address is cherian@cherianmathew.com" . "\n"  . "\n";  
$message = $message . "Thank You." . "\n" . "\n"; 
$message = $message . "To unsubscribe or change subscriber options visit:" . "\n";
$message = $message . "http://www.cherianmathew.com/accounts.php?em=" . $_POST["my_Email"];

mail($to,$subject,$message,$headers);

 ?>

<p><h4>Dear  <?php  echo $_POST["my_FirstName"];  ?>,</h4></p>

<p>Thank you for requesting my email address. I have sent an email to your 
email address.&nbsp; You can check your email and reply to me....</p>
<p>Thank you once again,</p>
<p>Cherian Mathew. </p>

<?php } 
Else { ?>

<h1>Request my email address</h1>
<p>Please fill up this form to request my email address. When you submit this 
form with your email address, I will send an email to your email address 
immediately with my email address. If you don&#39;t have an email address, use my 
instant messaging system to send message to me direcly. </p>
<form action="emailrqst.php" method="post">
  <p>Please enter your information:</p>
  <blockquote>
    <table>
      <tr>
        <td align="right"><em>First Name</em></td>
        <td><input size="25" name="my_FirstName" class="forminput" value='<?php echo $_SESSION['Name'];  ?>'><font color="#ff0000" size="5">*</font>
        </td>
      </tr>
      <tr>
        <td align="right"><em>E-mail</em></td>
        <td>
        <input size="35" name="my_Email" class="forminput" value=<?php echo $_SESSION['Email'];  ?>><font color="#ff0000" size="5">*</font>
        </td>
      </tr>
    </table>
  </blockquote>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type="submit" value="Send Request" class="forminput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Clear" class="forminput"> </p>
</form>

<?php } ?>
<p><br>
</p>
      </p>
      </p>
<p>
<img src="images/hrlong.jpg" alt="horizontal bar" />
</p></td>
</tr>
<tr>
<td class="footerleft">
<!--webbot bot="Include" u-include="include_copyright.htm" tag="BODY" startspan -->

CherianMathew.com &copy; 2006

<!--webbot bot="Include" i-checksum="16924" endspan --></td>
<td class="footerright">
<!--webbot bot="Include" u-include="include_footer.htm" tag="BODY" startspan -->

<a href="home.php">Home</a> &bull; 
<a href="aboutme.htm">About Me</a> &bull; 
<a href="interests.htm">Interests</a> &bull; 
<a href="photo.php">Photo Album</a> &bull; 
<a href="favorites.htm">Favorites</a> &bull; 
<a href="feedback.php">Feed Back</a> &bull; 
<a href="chat.htm">Chat</a> &bull; 
<a href="guestbook.php">Guest Book</a> &bull; 
<a href="searchme.htm">Search</a> &bull; 
<a href="contact.htm">Contact Me</a>
<p>Graphic Design by <a href="http://www.rtbwizards.com"  target="new">Round the Bend Wizards</a></p>
<!--webbot bot="Include" i-checksum="51495" endspan --></td>
</tr>
</tbody>
</table>
</div>

</body>

</html>