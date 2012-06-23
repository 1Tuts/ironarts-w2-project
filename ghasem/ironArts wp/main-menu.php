	<style type="text/css">
	<?php if($post->post_title != 'Portfolio' && $post->post_title != 'About us' && $post->post_title != 'contact us'){ 
	echo'
		.page-item-53{/*home class  /53 is id of home*/
			background-color: black;
		}
	';}
	else if($post->post_title == 'Portfolio'){
		echo'
		.page-item-56{/*Portfolio class  /56 is id of Portfolio*/
			background-color: black;
		}
	';} 
	else if($post->post_title == 'About us'){
		echo'
		.page-item-61{/*About us class  /61 is id of About us*/
			background-color: black;
		}
	';}
	else if($post->post_title == 'contact us'){
		echo'
		.page-item-58{/*contact us class  /58 is id of contact us*/
			background-color: black;
		}
	';} 
	?>
	
	</style>
	<div class="logo mla mra">s
			<h1>LOUTOS IRON</h1>
		</div>
		<ul class="mla mra">

			<?php 
			wp_list_pages(

				array(
					'title_li' => '',
					'child_of' => 51,
					'depth'    => 1
				)

			); ?>
		</ul>