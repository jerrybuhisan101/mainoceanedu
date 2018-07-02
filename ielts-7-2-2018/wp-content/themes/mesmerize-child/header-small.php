<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- fb code -->
<div id="fb-root"></div> 
<script>(function(d, s, id) { 
var js, fjs = d.getElementsByTagName(s)[0]; 
if (d.getElementById(id)) return; 
js = d.createElement(s); js.id = id; 
js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12'; 
fjs.parentNode.insertBefore(js, fjs); 
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end of fb code -->
<div  id="page-top" class="header-top small">
    <?php mesmerize_get_navigation(); ?>
</div>

<div id="page" class="site">
