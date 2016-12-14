<?php
get_header();
?>
    <!-- single-post -->
<?php
if ( is_user_logged_in() ) {
    $cat = $post->post_type; ?>
    <section class="custom-page">
        <div class="container">
            <div class="with-sidebar">
                <div class="full-width">
                    <ul class="full-width bread-crumb">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $cat; ?>">Board Portal</a></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
                <div class="row">
                    <h1><?php the_title(); ?></h1>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <div class="row">
                    <?php if ( have_rows( 'board_portal_repeater' ) ) : ?>
                        <h5><?php the_field( 'board_portal_main_title' ); ?></h5>
                        <ul class="board_portal_resources">
                            <?php
                            while ( have_rows( 'board_portal_repeater' ) ) : the_row(); ?>
                                <li><a download
                                       href="<?php echo get_sub_field( 'board_portal_resource' ); ?>"><?php echo get_sub_field( 'board_portal_title' ); ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php comments_template(); ?>
                </div>
            </div> <!-- with-sidebar -->
            <?php include( TEMPLATEPATH . '/sidebar-board-portal.php' ); ?>
        </div><!-- container -->
    </section>
    <?php include( TEMPLATEPATH . '/association-slider.php' ); ?>
<?php } else {
    ?>
    <section class="single-page light-bg">
        <div class="container">
            <div class="full-width">
                <div class="login-form">
                    <?php
                    echo do_shortcode( '[simple-login-form]' );
                    ?>    </div>
            </div>
        </div>
    </section>
    <?php
} ?>
<?php get_footer(); ?>