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
		<div class="nav left">
			<div class="logo mla mra">
				<h1>LOUTOS IRON</h1>
			</div>
			<ul class="mla mra">
				<li class="home-li"><a href="index.php">HOME</a></li>
				<li class="about-li"><a href="about.php">ABOUT</a></li>
				<li class="port-li"><a href="portfolio.php" style="background-color:black">PORTFOLIO</a></li>
				<li class="contanct-li"><a href="contact.php">CONTACTS</a></li>
			</ul>
		</div>
		<div class="container-content ml7">
<!------------portfolio------------>
			<div class="portfolio-content">
				<h1>MY PORTFOLIO</h1>
				<div class="sample w11 last">
					<img class="left" src="images/doors/thumb.jpg"   width="251" height="211">
					<div class="desc">
						<h1>DOORS</h1>
						<p>
							Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique.
						</p>
						<div class="more">
							<a href="images/doors/1.jpg" title="" rel="lightbox[group1]">More Samples</a>
						</div>
						
						<?php
							$pics_name = 1;
							$dir = './images/doors';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group1]' ></a>";
								$pics_name++;
							}
						?>
						
					</div>
				</div>
				<div class="clear"></div>
				<div class="sample w11 last">
					<img class="left" src="images/staircase/thumb.jpg"  width="251" height="211">
					<div class="desc">
						<h1>STAIRCASES</h1>
						<p>
							Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique.
						</p>
						<div class="more">
							<a href="images/staircase/1.jpg" title="" rel="lightbox[group2]">More Samples</a>
						</div>
						<?php
							$pics_name = 1;
							$dir = './images/staircase';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group2]' ></a>";
								$pics_name++;
							}
						?>
					</div>
				</div>
				<div class="clear"></div>
				<div class="sample w11 last">
					<img class="left" src="images/furniture/thumb.jpg"  width="251" height="211">
					<div class="desc">
						<h1>FURNITURES</h1>
						<p>
							Praesent vestibulum molestie lacus. Aenean nonummy 1999 hendrerit mauris. Phasellus porta. Fusce sucipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus 2001 mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas 2011 tristique.
						</p>
						<div class="more">
							<a href="images/furniture/1.jpg" title="" rel="lightbox[group3]">More Samples</a>
						</div>
						<?php
							$pics_name = 1;
							$dir = './images/furniture';
							$allowed_type = array('jpg','jpeg','png','gif');
							$d = dir($dir);
							while($file_type = $d->read()){
								$files = end(explode('.',$file_type) );
								if(!in_array(strtolower($files) ,$allowed_type) ) continue;
								echo "<a href='$dir/$pics_name.jpg' title='' rel='lightbox[group3]' ></a>";
								$pics_name++;
							}
						?>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
	</div>
<!------------footer------------>
	<div class="bottom-background">
		<div class="bottom-container">
			<div class="bottom-content mla mra">
				<div class="topic mla mra">
				<div class="clear"></div>
					<div class="art">
						<h2>Articles</h2>
						<ul>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
						</ul>
					</div>
					<div class="cat">
						<h2>Categories</h2>
						<ul>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
							<li><a href="#">test testtest test testtest </a></li>
						</ul>
					</div>
					<div class="arc">
						<h2>archive</h2>
						<ul>
							<li><a href="#">test testtest testtest test testtest </a></li>
							<li><a href="#">test testtest test test test testtest </a></li>
							<li><a href="#">test testtest testtest test  testtest </a></li>
							<li><a href="#">test testtest testtest  testtest </a></li>
							<li><a href="#">test testtest test testtest  test </a></li>
						</ul>
					</div>
					<div class="fli cover">
						<h2>flickr</h2>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="footer-container">
			<div class="footer-content mla mra">
				<div class="copy left">
					<h4>Copyright © 2012. All rights reserved. check this project at <a href="https://github.com/1schools-projects/ironarts">Github</a></h4>
				</div>
				<div class="social">
					<a href="http://www.facebook.com/hamid.rahbar.3"><img src="images/facebook.png" width="35" height="35" alt="facebook" /></a>
					<a href="#"><img src="images/google-plus.jpg" width="32" height="32" alt="plus" /></a>
					<a href="#"><img class="last-child" src="images/twitter.png" width="35" height="35" alt="twitter" /></a>
				</div>
			</div>
		</div>
	</div>
<!------------backImage------------>
	<div class="backimg">
		<div class="img1" style="opacity:.7"></div>
		<div style="background-color:black;opacity:.7;"></div>
	</div>
</body>
</html>