<?php 
/*
* Template Name: Archive Events
*/
get_header();
 ?>

 <?php 
    $ptc_events     =   array( 'post_type' => 'ptc_events');
    $repeat_events  =   new WP_Query( $ptc_events );
  ?>

<section id="primary">
    <div id="content" role="main" style="width: 70%">
    <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <h1 class="page-title">Archive</h1>
        </header>
        <table>
            <!-- Display table headers -->
            <tr>
                <th style="width: 200px"><strong>Title</strong></th>
                <th><strong>Association</strong></th>
            </tr>
            <!-- Start the Loop -->
            <?php while ( have_posts() ) : the_post(); ?>
                <!-- Display review title and author -->
                <tr>
                    <td><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></td>
                    <td><?php echo esc_html( get_post_meta( get_the_ID(), 'ptc_associations', true ) ); ?></td>
                </tr>
            <?php endwhile; ?>
 
            <!-- Display page navigation -->
 
        </table>
        <?php global $wp_query;
        if ( isset( $wp_query->max_num_pages ) && $wp_query->max_num_pages > 1 ) { ?>
            <nav id="<?php echo $nav_id; ?>">
                <div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Older reviews'); ?></div>
                <div class="nav-next"><?php previous_posts_link( 'Newer reviews <span class= "meta-nav">&rarr;</span>' ); ?></div>
            </nav>
        <?php };
    endif; ?>
    </div>
</section>
<br /><br />
<?php get_footer(); ?>