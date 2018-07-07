<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
 add_filter('xmlrpc_enabled', '__return_false');
function implement_ajaxx() {
if(isset($_POST['id-xe']))
            {    $xe=$_POST['id-xe'];
                $args = array();
           $new=new WP_Query('p='.$xe); while($new->have_posts()): $new->the_post(); 
           			$option.="<li>".get_the_post_thumbnail('medium' )."</li>
					<li>".get_the_title()."</li>
					<li>".get_field('dc')."</li>
					<li>".get_field('cs')."</li>
					<li>".get_field('tg')."</li>
					<li>".get_field('vt')."</li>
					<li>".get_field('nl')."</li>
					<li>".get_field('cd')."</li>
					<li>".get_field('dd')."</li>
					<li>".get_field('kt')."</li>
					<li>".get_field('gia')."</li>";
           endwhile;
              echo $option;
            die();
            } // end if
}
add_action('wp_ajax_tinh_du_toan', 'implement_ajaxx');
add_action('wp_ajax_nopriv_tinh_du_toan', 'implement_ajaxx');
add_theme_support( 'post-formats', array( 'aside' ) );
class Home_style extends WP_Widget {
	function Home_style(){
		parent::WP_Widget('Home_style',
				'Tin tức Home',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="home-box2">
					<div class="home-box2-left">
						<h2><a href="<?php echo get_category_link($sp); ?>"><?php echo get_cat_name($sp); ?></a></h2>
						
						<div class="list-post-box-no clearfix">
							<?php $new=new WP_Query('showposts=1&cat='.$sp);while($new->have_posts()) : $new->the_post();  ?>
								<ul class="post clearfix">
									
									<li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium' ); ?></a></li>
									<li class="rs title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									
									<li><?php the_excerpt(); ?></li>
								</ul>
							<?php endwhile; ?>
						</div>
						<div class="right-box2 clearfix">
							<ul class="home-top-news-box2-post-left">
							<?php $x=0;$new=new WP_Query('showposts=5&offset=1&cat='.$sp);while($new->have_posts()) : $new->the_post(); $x++; ?>
						
							<li class="clearfix"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium' ); ?><?php the_title(); ?></a></li>
							
						
						
							<?php endwhile; ?></ul>
						</div>
					</div></div> 
					<!-- End -->

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
				<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
					<?php $args = array(
							  'orderby' => 'name','hide_empty'=>0,
							  'order' => 'ASC'
							  );$categories=get_categories( $args ); foreach($categories as $category) {?>
							  <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
							  
							  <?php } ?>
				</select>
				
		</p>
		
		
<?php
	}
}
    register_widget('Home_style');
class Home_style_2 extends WP_Widget {
	function Home_style_2(){
		parent::WP_Widget('Home_style_2',
				'Dự án Home',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="home-box2">
					<div class="home-box2-left">
						<h2 class="title-cat bggray bggray"><a href="<?php echo get_category_link($sp); ?>">
							<?php echo get_cat_name($sp); ?></a></h2>
						<div class="hr line-style"></div>
						<div class="da-archive clearfix">
							<?php $new=new WP_Query('showposts=10&cat='.$sp);while($new->have_posts()) : $new->the_post();  ?>
								<div class="da-child da-home clearfix col-md-3">
									<ul>
										<li class="archive1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></li>
										
										<li class="archive2 rs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<li class="mota"><?php the_field('mota'); ?></li>
									</ul>
								</div>
							<?php endwhile; ?>
						</div>
					</div></div> 
					<!-- End -->

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
				<select name="<?php echo $this->get_field_name('sp'); ?>" id="<?php echo $this->get_field_id('sp'); ?>">
					<?php $args = array(
							  'orderby' => 'name','hide_empty'=>0,
							  'order' => 'ASC'
							  );$categories=get_categories( $args ); foreach($categories as $category) {?>
							  <option value="<?php echo $category->term_id; ?>" <?php if($category->term_id ==$sp){echo 'selected="selected"';} ?>><?php echo $category->cat_name; ?></option>
							  
							  <?php } ?>
				</select>
				
		</p>
		
		
<?php
	}
}
    register_widget('Home_style_2');
class Home_style_1 extends WP_Widget {
	function Home_style_1(){
		parent::WP_Widget('Home_style_1',
				'Tin tức Sidebar',
				array('description' => ''));
	}

	function widget( $args, $instance ) {
		extract($args);
		$title = apply_filters( 'widget_title',
				empty($instance['title']) ? '' : $instance['title'],
				$instance, $this->id_base);
		$sp = apply_filters( 'widget_text', $instance['sp'], $instance );

		echo $before_widget;
	?><div class="all-kh">
				<div class="cat-title-sidebar">
										<a href="<?php echo get_category_link($sp )?>"><?php echo get_cat_name($sp);?></a>
									</div>
							<div class="row-fluid list-home">
								
								<?php $new=new WP_Query('showposts=6&cat='.$sp);$x=0;while($new->have_posts()) : $new->the_post();$x++;?>
											<ul class="list-s-post clearfix">
											<li class="title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
											
											<li class="title"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium' );?></a></li>
											 <li><?php the_excerpt(); ?></li>
								</ul>	
							<?php   endwhile;?>
							</div>
							
			</div>	

		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['sp'] =  $new_instance['sp'];
		
		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, 
			array( 'title' => '', 'sp' => '' ) );
		$title = strip_tags($instance['title']);
		$sp = ($instance['sp']);
		
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Tiêu đề :'); ?> </label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo  get_cat_name($sp);?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('sp'); ?>">
				<?php _e('Id Chuyên Mục.'); ?> </label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('sp'); ?>" name="<?php echo $this->get_field_name('sp'); ?>" value="<?php echo $sp;?>" />
	<ul><?php
$args = array(
  'orderby' => 'name',
  'hide_empty' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
	echo '<li>'.$category->name . ' - '.$category->term_id .'</li>';
}
?></ul>
						
		</p>
		
		
<?php
	}
}
    register_widget('Home_style_1');
    function custom_excerpt_length( $length ) {
	return 42;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	add_theme_support('post-thumbnails');
	register_nav_menu( 'trung', 'Main Menu' );
	register_nav_menu( 'top', 'Top Menu' );
	require_once locate_template('theme-options.php');
	
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
function thietkewebwordpress_custom_js() {
   echo '<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,\'script\',\'https://connect.facebook.net/en_US/fbevents.js\');fbq(\'init\', \'1693694097555316\');fbq(\'track\', "PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1693694097555316&ev=PageView&noscript=1"/></noscript>';
}
add_action('wp_head', 'thietkewebwordpress_custom_js');
register_sidebar( array(
		'name'          => __( 'Head', 'theme_text_domain' ),
		'id'            => 'head',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle"><span>',
		'after_title'   => '</span></h6>'
	) );
register_sidebar( array(
		'name'          => __( 'Home Mobile', 'theme_text_domain' ),
		'id'            => 'home-d',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="ttl-sanpham "><span>',
		'after_title'   => '</span></h6>'
	) );
register_sidebar( array(
		'name'          => __( 'Đối tác', 'theme_text_domain' ),
		'id'            => 'doitac',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle"><span>',
		'after_title'   => '</span></h6>'
	) );
	register_sidebar( array(
		'name'          => __( 'Home News', 'theme_text_domain' ),
		'id'            => 'home-c',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s clearfix">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle"><span>',
		'after_title'   => '</span></h6>'
	) );
	register_sidebar( array(
		'name'          => __( 'Post', 'theme_text_domain' ),
		'id'            => 'post',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle"><span>',
		'after_title'   => '</span></h6>'
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'theme_text_domain' ),
		'id'            => 'sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widgettitle-all ttl-sidebarchildx"><i class="fa fa-th-list"></i> ',
		'after_title'   => '</h6>'
	) );


	register_sidebar( array(
		'name'          => __( 'Footer1', 'theme_text_domain' ),
		'id'            => 'footer1',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s col-md-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="ttl-footer"><span>',
		'after_title'   => '</span></h6><div class="line-gray"></div>'
	) );
	register_sidebar( array(
		'name'          => __( 'Footer2', 'theme_text_domain' ),
		'id'            => 'footer2',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1s" class="widget %2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="ttl-footer"><span>',
		'after_title'   => '</span></h6><div class="line-gray"></div>'
	) );
	
function getPostViews($postID){ // hàm này dùng để lấy số người đã xem qua bài viết
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){ // Nếu như lượt xem không có
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0"; // giá trị trả về bằng 0
    }
    return $count; // Trả về giá trị lượt xem
}
function setPostViews($postID) {// hàm này dùng để set và update số lượt người xem bài viết.
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++; // cộng đồn view
        update_post_meta($postID, $count_key, $count); // update count
    }
}

function prefix_register_namex() {

    $labels = array(
        'name'                => __( 'Phụ kiện', 'text-domain' ),
        'singular_name'       => __( 'Phụ kiện', 'text-domain' ),
        'add_new'             => _x( 'Add New Phụ kiện', 'text-domain', 'text-domain' ),
        'add_new_item'        => __( 'Add New Phụ kiện', 'text-domain' ),
        'edit_item'           => __( 'Edit Phụ kiện', 'text-domain' ),
        'new_item'            => __( 'New Phụ kiện', 'text-domain' ),
        'view_item'           => __( 'View Phụ kiện', 'text-domain' ),
        'search_items'        => __( 'Search Phụ kiện', 'text-domain' ),
        'not_found'           => __( 'No Phụ kiện found', 'text-domain' ),
        'not_found_in_trash'  => __( 'No Phụ kiện found in Trash', 'text-domain' ),
        'parent_item_colon'   => __( 'Parent Phụ kiện:', 'text-domain' ),
        'menu_name'           => __( 'Phụ kiện', 'text-domain' ),
    );

    $args = array(
        'labels'                   => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => null,
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail',
            'excerpt','custom-fields', 'trackbacks', 'comments',
            'revisions', 'page-attributes', 'post-formats'
            )
    );

    register_post_type( 'phu-kien', $args );
}

add_action( 'init', 'prefix_register_namex' );


/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function prefix_register_namexx() {

    $labels = array(
        'name'                    => _x( 'Danh mục Phụ kiện', 'Taxonomy Danh mục Phụ kiện', 'text-domain' ),
        'singular_name'            => _x( 'Danh mục Phụ kiện', 'Taxonomy Danh mục Phụ kiện', 'text-domain' ),
        'search_items'            => __( 'Search Danh mục Phụ kiện', 'text-domain' ),
        'popular_items'            => __( 'Popular Danh mục Phụ kiện', 'text-domain' ),
        'all_items'                => __( 'All Danh mục Phụ kiện', 'text-domain' ),
        'parent_item'            => __( 'Parent Danh mục Phụ kiện', 'text-domain' ),
        'parent_item_colon'        => __( 'Parent Danh mục Phụ kiện', 'text-domain' ),
        'edit_item'                => __( 'Edit Danh mục Phụ kiện', 'text-domain' ),
        'update_item'            => __( 'Update Danh mục Phụ kiện', 'text-domain' ),
        'add_new_item'            => __( 'Add New Danh mục Phụ kiện', 'text-domain' ),
        'new_item_name'            => __( 'New Danh mục Phụ kiện Name', 'text-domain' ),
        'add_or_remove_items'    => __( 'Add or remove Danh mục Phụ kiện', 'text-domain' ),
        'choose_from_most_used'    => __( 'Choose from most used text-domain', 'text-domain' ),
        'menu_name'                => __( 'Danh mục Phụ kiện', 'text-domain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => false,
        'hierarchical'      => true,
        'show_tagcloud'     => true,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );

    register_taxonomy( 'dm-dt', array( 'phu-kien'), $args );
}

add_action( 'init', 'prefix_register_namexx' );
		
?>