<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:..LOUTOS IRON..:</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="1styles.css" />
<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="mystyle.css" />
<link href='http://fonts.googleapis.com/css?family=Julee|Fredericka+the+Great|Oleo+Script|Berkshire+Swash' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/lightbox.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>
</head>
<body>
<div class="container">
	<div class="nav nav-contact left">
		<?php include('main-menu.php') ?>
	</div>
	<div class="container-content ml8 cover">
		<div class="contact-us-form w14">
			<div class='send-alert-error'>Error in sending mail. </div>
			<div class='send-alert-correct'>Thank's for sending mail. </div>
			<h1>SEND MESSAGE</h1>
			<form method="post" action="">
				<table>
					<tr>
						<td><p>Full name <span>*</span></p></td>
						<td><input type="text" class="name" name="name" ></td>
					</tr>
					<tr>
						<td><p>Email <span>*</span></p></td>
						<td><input type="text" class="user-email" name="user-email" ></td>
					</tr>
					<tr>
						<td><p>Subject <span>*</span></p></td>
						<td><input type="text" class="subject" name="subject"></td>
					</tr>
					<tr>
						<td><p>Phone-number <span>*</span></p></td>
						<td><input type="text" class="phone" name="phone"></td>
					</tr>
					<tr>
						<td><p>Message <span>*</span></p></td>
						<td><textarea class="textarea" name="Message" ></textarea></td>
					</tr>
				</table>
				<input type="submit" class="ok" name="submit" value="SEND EMAIL">
				<input type='reset' class='ok' name='reset'  onClick='hide_send_alert()' value='RESET'>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!--..........footer.........-->
<div class="bottom-background">
	<?php include('footer.php') ?>
</div>
<!------------backImage------------>
<div class="backimg">
	<div class="img2" style="opacity:0.7"></div>
	<div style="background-color:black;opacity:0.7;"></div>
</div>
</body>
</html>
