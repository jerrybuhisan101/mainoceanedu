<!DOCTYPE html>
<html lang="vi">
<head>
<meta name="p:domain_verify" content="c7e8feed53e84d2ca6e1108fb7798f4d"/>
<meta name="google-site-verification" content="NOKfjGcajlTKCqXsWCzDr5sZuG4Jh0auEbi486zkGt4" />
<meta name="DC.title" content="Mitsubishi Trung Thượng, Mitsubishi Motor VietNam" />
<meta name="geo.region" content="VN-HN" />
<meta name="geo.position" content="21;106" />
<meta name="ICBM" content="21, 106" />

	<meta charset="UTF-8">
	<title><?php wp_title(' '); ?></title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="http://mitsubishi-trungthuong.com.vn/wp-content/themes/thietkewebwordpress/style1.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<?php wp_head(); ?>
		<?php if(get_option('origin-favicon')){ ?>
			<link rel="shortcut icon" href="<?php echo get_option('origin-favicon');?>" type="image/x-icon"> 
	<?php }?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86173351-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class($class); ?>> 
	
	<div id="containerper">
		
			
		<div id="header" class="nav-fix"><div class="menu-top clearfix"><div class="container">
					<ul class="list-xe-menu">
						<?php 
							$args = array(
							  'include' => '21,22,23,24,25,26,53,59',
							  'parent' => 0 , 'hide_empty'=>0,
							  'orderby'=>'id'
							  );
							$categories = get_categories( $args );
							foreach ( $categories as $category ) {
								?>
									<li><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>
										<?php $args = array(
							  'parent' => $category->cat_ID , 'hide_empty'=>0,
							  'orderby'=>'id'
							  );
							$categoriesx = get_categories( $args );if($categoriesx) { echo '<ul class="list-xe-child">';}
							foreach ( $categoriesx as $categoryx ) { if(get_field('hidden','category_'.$categoryx->cat_ID)!='1'){  ?>
<li><a href="<?php echo get_category_link( $categoryx ); ?>"><?php echo $categoryx->name; ?></a>


<?php }} echo '</ul>';}?>
									</li>
						
						
					</ul>	
				</div></div>
			<div class="container clearfix">
				
				<div class="head clearfix">
					<div class="logo">
						<a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>">
							<?php 
							if(get_option('origin-logo')){ ?>
								<img src="<?php echo get_option('origin-logo');?>" alt="<?php bloginfo('title');?>"/>
							<?php }else{?>
								<img src="http://www.mitsubishi-motors.co.th/images/logo/mitsubishi-logo-h.png" alt="<?php bloginfo('title');?>"/>
							<?php }?>
						</a>
					</div><div class="con-m clearfix">
						<div class="mobile-menu"><a href="#"><i class="fa fa-th-list"></i> Menu Mobile</a></div>
						<?php wp_nav_menu(array('theme_location' => 'trung','menu_class' => 'menu')); ?> </div>
				</div>
			</div>
			
		</div><!--end #header-->
		
		


