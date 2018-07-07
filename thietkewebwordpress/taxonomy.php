<?php get_header(); $a=get_query_var('cat' );?>
	<div id="maincontent">
		<div class="container clearfix">
				<div class="bg-f">
			<div class="row">
			
			<div class="content col-md-12">
				<div class="all-box">
					<div class="breadcrumb">
				    <?php if(function_exists('bcn_display'))
				    { bcn_display();}?>
				</div>
				<h1 class="ttl-sanpham rs" hidden><?php echo single_cat_title();?></h1>
			
							<div class="cat-des">
								<?php echo category_description( ); ?>
							</div>
						<div class="loc-phu-kien clearfix">
							<div class="left-text">Tìm kiếm theo</div>
							<form action="" method="post" name="sosanh" class="form-pk">
							<select name="id-xe" id="id-xe"><option value="0">Vui lòng chọn xe !</option>
								<?php 
							$args = array(
							  'taxonomy'=>'dm-dt',
							  'parent' => 0 , 'hide_empty'=>0,
							  'orderby'=>'id'
							  );
							$categories = get_categories( $args );
							foreach ( $categories as $category ) {
								?>
<option value="" disabled class="not-select"><?php echo $category->name; ?></option>
<?php 
							$args = array(
							  'taxonomy'=>'dm-dt',
							  'parent' => $category->cat_ID , 'hide_empty'=>0,
							  'orderby'=>'id'
							  );
							$categoriesx = get_categories( $args );
							foreach ( $categoriesx as $categoryx ) {
								?>
	<option value="<?php echo $categoryx->cat_ID; ?>" <?php if($_POST['id-xe']==$categoryx->cat_ID) {echo 'selected="selected"';} ?>>»  <?php echo $categoryx->name; ?></option>
	<?php } ?>
								<?php } ?>
							</select>
							<input type="submit" name="button" id="button" class="tcp" value="Tìm kiếm">
						</form>
						</div>
							<div class="sum-archive row ">
								<?php if(!$_POST){
									while(have_posts()):the_post(); ?>

								<div class="archive-child col-md-4 phukien-cat clearfix">
									<ul>
										<li class="archive1"><a href="#"><?php the_post_thumbnail('medium'); ?></a><i class="fa fa-file-o"></i></li>
										
										<li class="archive2 rs"><a href="#"><?php the_title(); ?></a></li>
										<li class="archive4"><?php the_excerpt(); ?></li>
										
									</ul>
								</div>
								<?php endwhile;wp_reset_postdata();wp_pagenavi();								}else{
	/**
	 * The WordPress Query class.
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 *
	 */
	$xe= $_POST['id-xe'];
	$args = array(
	
		'tax_query' => array(
		'relation'  => 'AND',
			array(
				'taxonomy'         => 'dm-dt',
				'field'            => 'id',
				'terms'            => $xe
			)
		),
		
		
	);

$query = new WP_Query( $args );while($query->have_posts() ) : $query->the_post();

								?>
								<div class="archive-child col-md-4 phukien-cat clearfix">
									<ul>
										<li class="archive1"><a href="#"><?php the_post_thumbnail('medium'); ?></a><i class="fa fa-file-o"></i></li>
										
										<li class="archive2 rs"><a href="#"><?php the_title(); ?></a></li>
										<li class="archive4"><?php the_excerpt(); ?></li>
										
									</ul>
								</div>
								<?php endwhile;wp_reset_postdata();wp_pagenavi(); }?>
							</div>
							
					</div>		
			</div>
</div></div>
		</div>
	</div><!-- end #maincontent-->		
<?php get_footer(); ?>		