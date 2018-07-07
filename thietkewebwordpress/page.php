<?php get_header(); ?>
	<div id="maincontent">
		<div class="container clearfix">

			<div class="row">
		
			<div class="content col-md-12">
				<div class="all-box">
				<div class="breadcrumb">
				    <?php if(function_exists('bcn_display'))
				    { bcn_display();}?>
				</div>
				<div class="entry">
					<?php 
						while(have_posts()):the_post();
					?>
					<h1 class="ttl-sanpham rs"><?php the_title(); ?></h1>

					<div class="content-post">
					<?php the_content(); ?>
</div>
					<?php endwhile; ?>
				</div></div>
			</div></div>
		</div>	
	</div><!--end maincontent-->
 
    
<?php get_footer(); ?> 