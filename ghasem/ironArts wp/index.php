<?php get_header(); ?>
<div class="container">
	<div class="nav nav-index left">
		<?php 	get_template_part('main', 'menu'); ?>
		<div class="hide-nav mla mra"></div>
	</div>

	<div class="container-content ml7 cover"> 

	<?php 
/*  in ja bayad be jaie post name   page ha gozashte beshe   man balad nabodam*/
	if($post->post_name == 'Portfolio'){
		get_template_part('portfolio','content');
	}
	else if($post->post_name == 'About us'){
		get_template_part('about','content');
	}
	else if($post->post_name == 'contact us'){
		get_template_part('contact','content');
	}
	else{
		echo 'Nothing................................';
	}
/*  in ja bayad be jaie post name   page ha gozashte beshe   man balad nabodam*/
	 ?>

	</div>
	<div class="clear"></div>

</div>

<!--..........footer.........-->
<div class="bottom-background" style='margin-top:650px;'>
	<?php get_footer(); ?>
</div>
<!--.........backImage.........-->

<div class="noise"></div>
<div class="backimg slideshow">
	<script type="text/javascript">
		for(var i=1;i<5;i++) document.write('<div style="background-image :url(<?php bloginfo('template_url') ?>/images/'+i+'.jpg);"></div>');
	</script>
</div>

</body>
</html>