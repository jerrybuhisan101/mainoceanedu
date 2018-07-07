<?php get_header(); 
global $wp_query;
$tax = $wp_query->get_queried_object();
?>
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
				<h1 class="ttlvip-archive">Tìm kiếm từ khóa "<?php  echo $_GET['s']; ?>"</h1>
				<div class="sum-archive">
					<?php 
						if(have_posts()){
						while(have_posts()):the_post();
					?>
					<div class="archive-child">
						<ul>
							<li class="archive1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></li>
							<li class="archive2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<li class="archive3"><?php the_time('d/m/Y | H:i'); ?></li>
							<li class="archive4"><?php the_excerpt(); ?></li>
						</ul>
					</div>
					<?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
					<?php }else{
						echo 'Không tìm thấy bài nào cho từ khóa "'.$_GET['s'].'"';	
					}?>
				</div>
			</div>
		</div>
	</div>	<!-- end #maincontent-->		
<?php get_footer(); ?>