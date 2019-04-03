<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>CherianMathew.com - Feedback</title>
<meta name="description" content="Request my residencial address" />
<meta name="keywords" content="address request" />
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
<img src="images/hrshort.jpg" alt="horizontal bar" width="230" height="20" /></p>
</td>
<td class="maintext">
<?php  
If  ($_POST["Personal_FullName"]<>"" and $_POST["Contact_StreetAddress"] <>"") {
 ?>
<p><h4>Dear  <?php  echo $_POST["Personal_FullName"];  ?>,</h4></p>
<p> Thank you for requesting my Address. I have received your request. I will reply soon </b>&nbsp;</p>

<p> Thank You!!!!!!</p>

<p> Yours Faithfully</p>

<p> Cherian Mathew</p>

<?php 

$to = "cherian@cherianmathew.com";
$subject ="Address Request from " . $_POST["Personal_FullName"];
$from = "addrequest@cherianmathew.com";  
$headers = "From:" . $from;

$message = $message . "Name : " . $_POST["Personal_FullName"] . "\n";
$message = $message . "Date of Birth : " . $_POST["Personal_DateOfBirth"] . "\n";
$message = $message . "Sex : " . $_POST["Personal_Sex"] . "\n";
$message = $message . "Met In : " . $_POST["Met_in"] . "\n";
$message = $message . "Address : " . $_POST["Contact_StreetAddress"] . "\n";
$message = $message . "City : " . $_POST["Contact_City"] . "\n";
$message = $message . "Country : " . $_POST["Contact_Country"] . "\n" . "\n" . "\n";
$message = $message . "To unsubscribe or change subscriber options visit:" . "\n";
$message = $message . "http://www.cherianmathew.com/accounts.php?em=" . $_SESSION['Email'];

mail($to,$subject,$message,$headers); 

}
Else {
 ?>

<h1>Address Request Form:</h1>
<p><font color="#FF0000">NOTE</font>: Address will not be given to Unrecognized
people. <b><font color="#FF0000">Please enter all the details so that it will be
easy for me to identify you.</font></b>&nbsp;</p>
<hr>
<form method=post action="addressrqst.php">
Please identify and describe yourself:
<BLOCKQUOTE>
<TABLE>
<TR>
<TD ALIGN="right">
<EM>Name</EM></TD>
<TD>
<INPUT TYPE=TEXT NAME="Personal_FullName" SIZE=35 class="forminput" value='<?php  echo $_SESSION['Name'];  ?>' >
</TD>
</TR>
<TR>
<TD ALIGN="right">
<EM>Date of Birth</EM></TD>
<TD>
<INPUT TYPE=TEXT NAME="Personal_DateOfBirth" SIZE=18 class="forminput">
</TD>
</TR>
<TR>
<TD ALIGN="right">
<EM>Sex</EM></TD>
<TD>
<INPUT TYPE=RADIO NAME="Personal_Sex" VALUE="Male" CHECKED class="forminput">
Male <INPUT TYPE=RADIO NAME="Personal_Sex" VALUE="Female" class="forminput">
Female</TD>
</TR>
</TABLE>
</BLOCKQUOTE>
<P>
If you have seen or met me earlier, describe an incident so that I can recognize
you</P>
<BLOCKQUOTE>
<P>
<TEXTAREA NAME="Met_in" ROWS=5 COLS=52 class="forminput"></TEXTAREA>
<BR>
</P>
</BLOCKQUOTE>
<P>
Please provide the following contact information:</P>
<BLOCKQUOTE>
<TABLE>
<TR>
<TD ALIGN="right">
<EM>Street Address</EM></TD>
<TD>
<INPUT TYPE=TEXT NAME="Contact_StreetAddress" SIZE=35 class="forminput">
</TD>
</TR>
<TR>
<TD ALIGN="right">
<EM>City</EM></TD>
<TD>
<INPUT TYPE=TEXT NAME="Contact_City" SIZE=35 class="forminput">
</TD>
</TR>
<TR>
<TD ALIGN="right">
<EM>Country</EM></TD>
<TD>
<INPUT TYPE=TEXT NAME="Contact_Country" SIZE=25 class="forminput">
</TD>
</TR>
</TABLE>
</BLOCKQUOTE>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE="SUBMIT" VALUE="Request now" class="forminput">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE="RESET" VALUE="Reset Form" class="forminput">
</FORM>

<?php  } ?>
<p>&nbsp;</p>
<div align="center">

</div>
<img src="images/hrlong.jpg" alt="horizontal bar" width="470" height="20" /></td>
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