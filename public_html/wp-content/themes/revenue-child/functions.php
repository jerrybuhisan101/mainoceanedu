<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    li#wp-admin-bar-happythemes{
      display:none !important;
    } 

    a.page-title-action {
    	display:none !important;
    }
  </style>';
}

function remove_dashboard_meta() {
	if ( ! current_user_can( 'manage_options' ) ) {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}
}
add_action( 'admin_init', 'remove_dashboard_meta' ); 

function disable_elementor_dashboard_overview_widget() {
	remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'disable_elementor_dashboard_overview_widget', 40);

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(http://students.ocean.edu.vn/wp-content/uploads/2018/05/logo-01.png);  
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

#DASHBOARD 1
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Welcome to Students Resource Center', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Hi There Ocean Edu Learners!, We welcome you to our students resource center website where useful information and supplemental tool can be found. We live in our motto to turn on your potential.</p>';
}

#REMOVE REGISTRATION
add_filter('register','no_register_link');
function no_register_link($url){
    return '';
}
?>
