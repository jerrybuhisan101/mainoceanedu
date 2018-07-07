<?php 
// Template Name: Sản phẩm
get_header();
?>
	<div id="maincontent" class="clearfix">
		<div class="baophu"></div>
		<div class="wrap">
			<div class="archive-sidebar floatleft">
				<?php get_sidebar(); ?>
			</div>
			<div class="archive-content floatleft clearfix">
				<div class="breadcrumbs">
				    <?php if(function_exists('bcn_display'))
				    { bcn_display();}?>
				</div>
				<h1 class="title-archive">
					<?php echo single_cat_title(); ?>
				</h1>
				<?php  $terms=get_terms('danh-muc-san-pham',array('hide_empty'=> false, 'orderby'=> 'id','parent'=> $tax) ); ?>
				<?php if(!empty($terms)){ ?>
				<div class="sum-tax">
					<?php foreach ($terms as $term) {?>
						<div class="forcat-child">
							<ul>
								<li  class="forcat1">
									<a href="<?php echo get_term_link( $term ); ?>">
										<img src="<?php $imgtax=get_field('anh','danh-muc-san-pham_'.$term->term_id); if($imgtax){the_field('anh','danh-muc-san-pham_'.$term->term_id);}?>" alt="">
									</a>
								</li>
								<li class="forcat2"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></li>
								<li class="forcat3">Thailand</li>
								<li class="forcat4"><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->count; ?> tour</a></li>
							</ul>
						</div>
					<?php }//end foreach ?>
				</div>
				<?php }else{ ?>



				<div class="sum-tax">
					<?php 
						if(have_posts()){
						while(have_posts()):the_post();
					 ?>
					<div class="forcat-child">
						<div class="baophu"></div>
						<ul>
							<li  class="forcat1">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?>
								</a>
							</li>
							<li class="forcat2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<li class="forcat3">Thailand</li>
							<li class="forcat4"><a href="<?php the_permalink(); ?>">? tour</a></li>
						</ul>
					</div>
					<?php endwhile;wp_reset_postdata();wp_pagenavi();?>
					<?php }else{ echo 'Hiện chưa có tour nào cả !';} ?>
				</div>
				<?php } ?>
			</div>
			
		</div>
	</div>	
<?php get_footer(); ?>		 