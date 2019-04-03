<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<title>CherianMathew.com - Guest Book</title>
<meta name="description" content="This is my Guest Book. People can add their comments here which will be added to my web site." />
<meta name="keywords" content="Guest Book" />
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
<h4>Need Help Fast?</h4>
<p><a href="faq.htm">Visit myr FAQs.</a> I have easy answers to the questions you ask the most.</p>
</td>
<td class="maintext">
<h1>Guest Book</h1>

<?php 
If ($_POST["sName"]<>"" and $_POST["sCmnt"]<>"" and $_POST["sName"]<>"..." and Trim($_POST["sHuman"])=="ther" and 1==2) {

$file=fopen("guestbook.txt","w") or exit("Unable to open file!");

  sName == $_POST["sName"];
  sName == Server.HTMLEncode(sName);
  sEmail == $_POST["sEmail"];
  sEmail == Server.HTMLEncode(sEmail);
  sUrl == $_POST["sUrl"];
  sUrl == Server.HTMLEncode(sUrl);
  sCmnt == $_POST["sCmnt"];
  sCmnt == Server.HTMLEncode(sCmnt);
  $New_line == "<HR><I>Posted: " . NOW . "</I><BR><b>Name:</b>" . sName . "<br><b>Email:</b>" . sEmail . "<br><b>Url:</b>" . sUrl . "<br><br><b>Comment:</b>" . sCmnt . "</HR>";

  fwrite($file,$New_line);

fclose($file);

 ?>

<p><h4>Dear  <?php  echo $_POST["sName"];  ?>,</h4></p>

<p>Thank you for your comments about me. It is added to the guest book. You can 
review it below. Thank 
you for your valuable time. </p>

<p>Regards,</p>

<p>Cherian Mathew. </p>

<?php } Else { ?>
<p>I&#39;d like to know what you think about my web site. Please leave your comments 
in this public guest book so I can share your thoughts with other visitors.</p>
<p><font color="#ff0000"><b>Note</b></font>:- The comments that you give here 
becomes the part of this website and <font color="#ff0000">can be viewed by the 
other visitors</font> of this site. If you want to give a personal comment use 
the feedback form or Contact me section. <font color="#ff0000">Mail me your image to add it in my guest book.</font>For 
security purpose I have disabled direct photo upload.</p>

<p><font color="#ff0000"><b>Guest book signing is disbled now.</b></font> </p>

<form action="guestbook.php" method="post">
  <table height="305" cellSpacing="0" cellPadding="2" width="400" border="0">
    <tr>
      <td height="38"><font face="times" color="#996600">First Name<br>
      <input name="sName" size="25" class="forminput" value='<?php  echo $_SESSION['Name'];  ?>'> </font></td>
    </tr>
    <tr>
      <td height="42"><font face="times" color="#996600">Email<br>
      <input name="sEmail" size="39" class="forminput" value=<?php  echo $_SESSION['Email'];  ?>> </font></td>
    </tr>
    <tr>
      <td height="42"><font face="times" color="#996600">URL<br>
      <input value="http://" name="sUrl" size="39" class="forminput"> </font></td>
    </tr>
    <tr>
      <td height="94"><font face="times" color="#996600">Comment<br>
      <textarea name="sCmnt" rows="5" wrap="virtual" cols="37" class="forminput"></textarea>
      </font></td>
    </tr>
    <tr>
      <td height="94"><font face="times" color="#996600">Enter the text as it is shown in the Image below:<br>
      <input name="sHuman" size="25" class="forminput"> </font><br> <img src="images/human.JPG" </td>
    </tr>


    <tr>
      <td height="49"><br>
      <font face="times" color="#996600">
      <input type="submit" value="Sign my Guestbook - Disabled" class="forminput"> &nbsp;&nbsp;<input type="reset" value="Clear form" class="forminput"></font></td>
    </tr>
  </table>
</form>

<?php  } ?>

<p>

<?php 
$file=fopen("guestbook.txt","r") or exit("Unable to open file!");

while (!feof($file))
  {    ?>
<br>
    <?php $S=fgets($file);
for ($I=1; $I<=(strlen($S)-13); $I++) {
If (substr($S,$I,13) == "<br><b>Email:") { 
For ($J = ($I+13); $J < strlen($S); $J++) {
    If (substr($S,$J,4) == "<br>") { 
     $S = substr($S,0,$I+17)  . " Hidden " . substr($S,-(strlen($S)-$J));
     $J = strlen($S);
      }
    } 
  }
} 
 ?>

<?php echo $S ?>
    <?php 
    }

    fclose($file);
 ?>

</p>
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