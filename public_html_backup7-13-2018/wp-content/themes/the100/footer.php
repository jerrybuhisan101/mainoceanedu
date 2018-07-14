<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_100
 */

?>

</div><!-- #content -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121917193-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121917193-1');
</script>

<!-- end of google -->

<footer id="colophon" class="site-footer">	
	<?php 
	if(get_theme_mod('the100_footer_top_setting','yes')=='yes'):
		if ( is_active_sidebar( 'the100-top-footer' ) ) :
			$columns = get_theme_mod('the100_footer_top_column','3');
		?>
		<div class="top-footer columns-<?php echo esc_attr($columns);?>">
			<div class="ed-container wow fadeInUp">
				<?php dynamic_sidebar( 'the100-top-footer' ); ?>    							
			</div>
		</div>	
	<?php endif; 
	endif; ?>
	<div class="main-footer">
		<div class="ed-container">
			<div class="site-info wow zoomIn">
				Copyright. Jerry Cris Buhisan
			</div><!-- .site-info -->
			<?php 
			if(get_theme_mod('the100_footer_main_menu','yes')=='yes'):
				if ( is_active_sidebar( 'the100-footer-menu' ) ) :
					?>
				<div class="footer-menu">
					<?php dynamic_sidebar( 'the100-footer-menu' ); ?>
				</div>	
			<?php endif;
			endif; ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<div id="es-top"><i class="fa fa-angle-up"></i></div>
<?php wp_footer(); ?>

</body>
</html>
