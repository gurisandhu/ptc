<?php
get_header();
if ( is_user_logged_in() ) {
    ?>
    <!-- archive -->
    <section class="single-page light-bg">
        <div class="container">
            <div class="full-width">
                <ul class="full-width bread-crumb">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
                    <li>Board Portal</li>
                </ul>
            </div>
            <div class="row">
                <h2>Board Portal</h2>
            </div>
            <div class="with-sidebar">
                <div class="full-width">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="single-padding row bg-shadow post">
                            <h1><?php the_title(); ?></h1>
                            <?php $content_to_trim = get_the_content(); ?>
                            <?php $trimedContent = trimText( $content_to_trim, "...", 400 );
                            ?>
                            <p><?php echo $trimedContent; ?></p>
                            <div class="full-width">
                                <button class="row but-left more">Read more</button>
                            </div>
                        </a>
                    <?php endwhile; endif; ?>
                </div>
            </div> <!-- with-sidebar -->
            <?php include( TEMPLATEPATH . '/sidebar-board-portal.php' ); ?>
        </div><!-- container -->
    </section>
    <section class="light-bg">
        <?php include( TEMPLATEPATH . '/association-slider.php' ); ?>
    </section>
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