<?php get_header(); ?>
	<div class="nav nav-index left">
		<?php 	get_template_part('main', 'menu'); ?>
		<div class="hide-nav mla mra"></div>
	</div>

	<div class="container-content ml7 cover"> </div>
<div class="clear"></div>


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