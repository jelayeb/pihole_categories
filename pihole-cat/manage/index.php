<?php

	session_start();
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
		header("Location: ../login.php");	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pi-HOle Category Management</title>
<link rel="stylesheet" type="text/css" href="stylesheets/view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>PiHOle-Cat Category Management</a></h1>
		<form id="form_9277" class="appnitro"  action="pihole.php" method="post" >
					<div class="form_description">
			<h2>PiHOle-Cat Category Management</h2>
			<p>Customize PiHOle-Cat Categories Lists. </p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Domain Name </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>DNS Name  to Block, like facebook.com, or media.facebook.com</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Category </label>
		<div>
		<select class="element select medium" id="element_2" name="element_2"> 
				<option value="1" >Social Networks</option>
				<option value="2" selected="selected">Pornography</option>
				<option value="3" >Hate /Discrimination</option>
				<option value="4" >Banking</option>
				<option value="5" >E-Commerce</option>
				<option value="6" >Hacking</option>
				<option value="7" >Gambling</option>
				<option value="8" >Drugs</option>
				<option value="9" >Sexuality</option>
				<option value="10" >P2P/File Sharing</option>
				<option value="11" >Dating</option>
				<option value="12" >Adware</option>
				<option value="13" >Download</option>
				<option value="14" >Demo</option>
				<option value="15" >Violence</option>
				<option value="16" >Warez</option>
				<option value="17" >Models</option>
				<option value="18" >Forums</option>
				<option value="19" >Chat</option>
				<option value="20" >Spyware</option>
		</div><p class="guidelines" id="guide_2"><small>Select Category you want to add the domain name to.</small></p> 
		</select>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Action </label>
		<div>
		<select class="element select medium" id="element_3" name="element_3"> 
				<option value="1" >Add</option>
				<option value="2" >Remove</option>
				<option value="3" selected="selected">Search</option>

		</select>
		</div><p class="guidelines" id="guide_3"><small>Select Action you want to make on this Domain. </small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="9277" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
			<div id="footer">
			Created by <a href="http://www.itech.ly">iTech Solutions</a>
		</div>
		</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
