<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>CherianMathew.com - My Home Page</title>
<meta name="description" content="A small intro about Cherian Mathew and about my web site" />
<meta name="keywords" content="cherian, mathew" />
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
<td colspan="2"><img src="images/mainimage.jpg" alt="main image" width="750" height="205" /></td>
</tr>
<tr>
<td><img src="images/shadowleft.jpg" alt="shadow" width="250" height="15" /></td>
<td><img src="images/shadowright.jpg" alt="shadow" width="500" height="15" /></td>
</tr>
<tr>
<td class="sidebar">
<h4>Site Menu:</h4>
<!--webbot bot="Include" u-include="include_mainnavigation.htm" tag="BODY" startspan -->
<div class="sidebarnav">
<ul>
<li><a href="index.htm">Home Page</a></li>
<li><a href="aboutme.htm">About Me</a> </li>
<li><a href="interests.htm">Interests</a> </li>
<li><a href="photo.htm">Photo Album</a> </li>
<li><a href="favorites.htm">Favorites</a> </li>
<li><a href="feedback.htm">Feed Back</a></li>
<li><a href="chat.htm">Chat</a></li>
<li><a href="guestbook.htm">Guest Book</a></li>
<li><a href="searchme.htm">Search</a></li>
<li><a href="contact.htm">Contact Me</a></li>
</ul>
</div>
<!--webbot bot="Include" i-checksum="26609" endspan --><p>
<img src="images/hrshort.jpg" alt="horizontal bar" width="230" height="20" /></p>
<h4>
<a href="tellafrnd.htm">
<img alt="Tell to your friends about my website" src="images/TELL_A_F.gif" align="left" border="0" width="123" height="17"></a></h4>
<p>&nbsp;</p>
<h4 align="left"> Verse of the day:</h4>
<p align="left">

<script type="text/javascript" language="JavaScript" src="http://www.biblegateway.com/usage/votd/votd2html.php?version=31&amp;jscript=1&newtarget=1">
</script>
<!-- alternative for no javascript -->
<noscript>
<a href="http://www.biblegateway.com/usage/votd/votd2html.php?version=31&amp;jscript=0&newtarget=1">View Verse of the Day</a>
</noscript>

</p>
<h4>Need Help Fast?</h4>
<p><a href="faq.htm">Visit my FAQs.</a> I have easy answers to the questions you ask the most..</p>
</td>
<td class="maintext">

<?php 

if ( $_POST["T1"] <> "") {

$_SESSION['Name'] = $_POST["T1"];
$_SESSION['Email'] = $_POST["T2"];
$_SESSION['Comments'] = $_POST["T3"];
    
$to = "cherian@cherianmathew.com";
$subject =  $_POST["T1"] . " has visited cherianmathew.com";
$from = "login@cherianmathew.com";
$headers = "From:" . $from;
     
$message = $_POST["T1"] . " has visited cherianmathew.com" . "\n" . "\n";  
$message = $message . $_POST["T1"] . "'s email address is " . $_POST["T2"] . "\n" . "\n";  
$message = $message . "Comments :" . $_POST["T3"] . "\n" . "\n";  
$message = $message . "To unsubscribe or change subscriber options visit:" . "\n";
$message = $message . "http://www.cherianmathew.com/accounts.php?em=" . $_SESSION['Email'];

mail($to,$subject,$message,$headers);


if ($_POST["T2"] <> "") {

$to = $_POST["T2"];
$subject = "Thank You for visiting cherianmathew.com";
$from = "cherian@cherianmathew.com";
     
$message = "Dear " . $_POST["T1"] . "," . "\n" . "\n";
$message = $message . "Thank you for visiting cherianmathew.com and giving me your email address. You can leave the email address field blank next time you login to my website." . "\n" . "\n"; 
$message = $message . "Keep in touch" . "\n" . "\n"; 
$message = $message . "God bless you" . "\n" . "\n"; 
$message = $message . "Cherian Mathew. " . "\n" . "\n"; 
$message = $message . "To unsubscribe or change subscriber options visit:" . "\n";
$message = $message . "http://www.cherianmathew.com/accounts.php?em=" . $_SESSION['Email'];

     
mail($to,$subject,$message,$headers);

}

}

 ?>


<h4><?php  
if ($_SESSION['Name']<>"") {
echo "Dear " . $_SESSION['Name'] . ",";
}
  ?></h4>
<p>Thank you for visiting my website. Thank you for sparing some time to spend 
it with me. I think this website will help me to keep in touch with my friends. 
I am indeed very happy that you visited my website. </p>
<p>If you are not familiar with me, <a href="aboutme.htm">Click Here</a> to know 
more about me. I have created this website for my friends to keep in touch and 
to express myself wholly to them, who reside worldwide. Hence don&#39;t forget to 
contact me after you view this site. </p>
<p>If it is your first time you visit this site don&#39;t forget to give your 
comment in my <a href="guestbook.htm">Guest book</a>. You can also use the 
<a href="feedback.htm">Feedback</a> form to send Instant 
messages to me. You can join my e-friends&#39; club and keep in touch with me.</p>
<p>Regards,</p>
<p>Cherian Mathew.</p>
<img src="images/hrlong.jpg" alt="horizontal bar" width="470" height="20" />

<!-- Bible Gateway -->
<center>
<form action="http://www.biblegateway.com/quicksearch/" method="post">
<table border="1" cellspacing="0" cellpadding="2" style="border-color: #600;">
<tr><th style="background-color: #600; color:#fff; text-align: center; padding: 0 10px;">Lookup a word or passage in the Bible</th></tr>
<tr><td style="background-color: #fff; text-align: center; padding: 0 10px;">
<p style="margin-bottom: 0;">
<input type="text" name="quicksearch" /><br />
<input type="submit" value="Search The Bible" /><br />
</p>
<a href="http://www.biblegateway.com/" title="The Bible in multiple languages, versions, and formats">
<img src="http://www.biblegateway.com/images/logos/bglogo_sm.gif" width="146" height="44" alt="BibleGateway.com" border="0" /></a><br />
</td></tr>
</table>
</form>
<img src="images/hrlong.jpg" alt="horizontal bar" width="470" height="20" />
</center>
<!-- Bible Gateway -->

</td>
</tr>
<tr>
<td class="footerleft">
<!--webbot bot="Include" u-include="include_copyright.htm" tag="BODY" startspan -->

CherianMathew.com &copy; 2006

<!--webbot bot="Include" i-checksum="16924" endspan --></td>
<td class="footerright">
<!--webbot bot="Include" u-include="include_footer.htm" tag="BODY" startspan -->

<a href="index.htm">Home</a> &bull; 
<a href="aboutme.htm">About Me</a> &bull; 
<a href="interests.htm">Interests</a> &bull; 
<a href="photo.htm">Photo Album</a> &bull; 
<a href="favorites.htm">Favorites</a> &bull; 
<a href="feedback.htm">Feed Back</a> &bull; 
<a href="chat.htm">Chat</a> &bull; 
<a href="guestbook.htm">Guest Book</a> &bull; 
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