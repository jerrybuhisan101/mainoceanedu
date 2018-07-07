<?php get_header(); ?>
	<div class="slider-home"><?php if(!wp_is_mobile()){ echo do_shortcode('[rev_slider home]' );}else{echo do_shortcode('[rev_slider mobile]' );}?></div>

	<div class="home-sidebar">
		<div class="container">
			<?php if(!wp_is_mobile()){dynamic_sidebar('home-c' );}else{dynamic_sidebar('home-d' );} ?>
		</div>
	</div>
<?php get_footer(); ?> 