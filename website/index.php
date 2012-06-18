<?php 

	get_header();
	
	if($post->post_name == 'home'){
		get_template_part('header','home');
	}else{
		get_template_part('header','other_pages');
	}


 ?>
	
<!--footer-->
<?php
	get_footer();
	get_template_part('footer','backimage');
	get_template_part('footer','close')
?>

