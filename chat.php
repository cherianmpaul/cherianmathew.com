<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>CherianMathew.com - Chat</title>
<meta name="description" content="A small JavaScript Based Chat" />
<meta name="keywords" content="chat" />
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
<p><a href="faq.htm">Visit my FAQs.</a> I have easy answers to the questions you ask the most.</p>
</td>
<td class="maintext">
<h1>Chat Room</h1>
<p>Please enter your name and log in to my chat room. (Signup not required)<br>
&nbsp;</p>
<p>
<Center>

<!-- Begin Chat Code -->

<?php
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="chat.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
		
		//Simple enter message
		$fp = fopen("log.html", 'a');
		fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has entered the chat session.</i><br></div>");
		fclose($fp);

    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}

if(isset($_GET['logout'])){ 
     
    //Simple exit message
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left the chat session.</i><br></div>");
    fclose($fp);
     
    session_destroy();
    header("Location: chat.htm"); //Redirect the user
}

?>



<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="chatter"> 
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <div id="chatbox">
	<?php
	if(file_exists("log.html") && filesize("log.html") > 0){
		$handle = fopen("log.html", "r");
		$contents = fread($handle, filesize("log.html"));
		fclose($handle);
     
    echo $contents;
	}
	?>
	</div>
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'chat.php?logout=true';}		
	});
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});

	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div	
				
				//Auto-scroll			
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
			},
		});
	}
		
	setInterval (loadLog, 2500);	//Reload file every 2500 ms
});
</script>

<?php
}
?>
</div>

<!-- End Chat Code -->

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
