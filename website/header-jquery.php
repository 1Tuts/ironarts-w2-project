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
				<?php
					wp_list_pages(array(
						'title_li' => '',
						'child_of' => 44,
						'depth'    => 1
					));
				?>
			</ul>
		</div>
		<div class="container-content ml7">