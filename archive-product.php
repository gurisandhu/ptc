<?php 
get_header();
 ?>
<?php
        $args = array(
            'delimiter'   => '',
            'wrap_before' => '<ul class="full-width bread-crumb" itemprop="breadcrumb">',
            'wrap_after'  => '</ul>',
            'before'      => '<li>',
            'after'       => '</li>',
        );
?>
<section class="section-2">
    <div class="container">
        <div class="with-sidebar">
            <div class="full-width">
                <?php woocommerce_breadcrumb( $args ); ?>
            </div>

            <?php if ( have_posts() ) : ?>

            <h2>Resources</h2>
            <ul class="full-width archive-product">
                <?php while ( have_posts() ) : the_post(); ?>
                        <?php wc_get_template_part( 'content', 'product' ); ?>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>

        <?php include (TEMPLATEPATH . '/shop-sidebar.php'); ?>
    </div>
</section>  

<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php wp_reset_query();  ?>
<?php get_footer(); ?>