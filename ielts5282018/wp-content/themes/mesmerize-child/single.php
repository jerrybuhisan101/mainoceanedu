<?php mesmerize_get_header(); ?>
    <div class="content post-page">
        <div class="gridContainer">
            <div class="row">
                <div class="col-xs-12 <?php mesmerize_posts_wrapper_class(); ?>">
                    <div class="post-item">
						<?php
						if ( have_posts() ):
							while ( have_posts() ):
								the_post();
								get_template_part( 'template-parts/content', 'single' );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
						 <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10" data-order-by="social" data-colorscheme="light"></div>
                    </div>
                </div>

				<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
<?php get_footer(); ?>