<?php get_header(); $p=$_GET['p'];?>
	<div id="maincontent">
		<div class="wrap">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
			<div class="content">
				<div class="breadcrumbs">
				    <?php if(function_exists('bcn_display'))
				    { bcn_display();}?>
				</div>
				<div class="entry">
					<div class="post-sidebar">
					<?php dynamic_sidebar('post' ); ?></div>
					<?php $new=new WP_Query('name='.$p);
						while($new->have_posts()):$new->the_post();
					?>
					<div class="archive-child clearfix">
									<ul>
										<li class="archive2 rs"><a href="<?php bloginfo('url' ); ?>/xem-tin/?p=<?php echo $post->post_name; ?>"><?php the_title(); ?></a></li>
										<li class="archive1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></li>
										
										
										<li class="archive4"><?php the_excerpt(); ?></li>
										<li><a class="xct"href="<?php  ?>">Xem chi tiết</a></li>
									</ul>
								</div>
								<?php foreach (get_the_category() as $cate) $cat=$cate->cat_ID;$a=$post->ID; ?>
					<?php endwhile; ?>
					<div class="lq-post">
					<h6 class="rs">Bài viết liên quan</h6>
					<ul class="bvlq clearfix">
						
						
						<?php 
							$bvlq= new WP_Query(array('showposts'=>4,'cat'=>$cat,'post__not_in'=>array($a))); while($bvlq->have_posts()) :$bvlq->the_post();
						?>
						
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						
						<?php endwhile; ?>
					</ul>
				</div>
				</div>
			</div>
		</div>	
	</div><!--end maincontent-->
	<script type="text/javascript">
	(function($) {
		var title= $('.title-nam').text();
$('.text-879 input').val(title);
}(jQuery));
	</script>
<?php get_footer(); ?> 