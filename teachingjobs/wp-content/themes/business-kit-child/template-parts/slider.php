<?php
/**
 * Helper functions.
 *
 * @package Business_Kit
 */

// Bail if no slider.
$slider_details = business_kit_get_slider_details();
if ( empty( $slider_details ) ) {
	return;
}

// Slider status.
$slider_status = business_kit_get_option( 'slider_status' );
if ( 1 !== absint( $slider_status ) ) {
	return;
}

if ( ! ( is_front_page()) && ! is_page_template( 'templates/home.php' ) ) {
    return;
} 

// Slider settings.
$slider_transition_effect 		= business_kit_get_option( 'slider_transition_effect' );
$slider_transition_delay  		= business_kit_get_option( 'slider_transition_delay' );
$slider_arrow_status      		= business_kit_get_option( 'slider_arrow_status' );
$slider_pager_status     		= business_kit_get_option( 'slider_pager_status' );
$slider_autoplay_status   		= business_kit_get_option( 'slider_autoplay_status' );
$slider_overlay_status   		= business_kit_get_option( 'slider_overlay_status' );

$slider_readmore_status   		= business_kit_get_option( 'slider_readmore_status' );
$slider_readmore_text   		= business_kit_get_option( 'slider_readmore_text' );

$slick_args = array(
    'slidesToShow'      => 1,
    'slidesToScroll'    => 1,
);

if ( 1 === absint( $slider_autoplay_status ) ) {
    $slick_args['autoplay']      = true;
    $slick_args['autoplaySpeed'] = 1000 * absint( $slider_transition_delay );
}else{
    $slick_args['autoplay']      = false;
}

if ( 1 === absint($slider_arrow_status) ) {
    $slick_args['arrows'] = true;
    
}else{
    $slick_args['arrows'] = false;
}

if ( 1 === absint($slider_pager_status) ) {
    $slick_args['dots']      = true;
    
}else{
    $slick_args['dots']      = false;
}

if ( 'fade' === $slider_transition_effect ) {
    $slick_args['fade']      = true;
    
}else{
    $slick_args['fade']      = false;
}

$slick_args_encoded = wp_json_encode( $slick_args );

$overlay_class = ( true === $slider_overlay_status ) ? 'overlay-enabled' : 'overlay-disabled' ;
?>
<section id="featured-slider">

        <div id="main-banner">

<?php echo do_shortcode('[metaslider id="438"]'); ?>
        </div><!-- .main-banner -->

</section><!-- #main-banner -->