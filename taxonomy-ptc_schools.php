<?php 
get_header();
 ?>
<!-- taxonomy -->
 <?php 
    $ptc_events     =   array( 'post_type' => 'ptc_events');
    $repeat_events  =   new WP_Query( $ptc_events );
    $school_login = False;

  ?>

<section class="section-2">
    <div class="container">
        <div class="full-width">
                <ul class="full-width bread-crumb">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">PTC</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>schools">Schools</a></li>
                    <li><?php single_term_title(); ?></li>
                </ul>
            </div>
        
        
        <?php include(TEMPLATEPATH . '/ptc-plus-form.php'); ?>
        

        <?php if (!$school_login): ?>
            <!--  -->
        <?php else: ?>
                <?php if ( have_posts() ) : ?>
                    <div class="full-width school-events">
                    <h2><?php single_term_title(); ?></h2>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php 
                        $association = get_the_terms( get_the_ID(), 'ptc_associations');
                        if ( !empty($association)){
                            $term = array_pop($association);
                            $asso_image = get_field('association_images', $term);
                        } else {
                            $term = '';
                            $asso_image = '';
                        }
                        $subjects   = get_the_terms( get_the_ID(), 'ptc_subjects');
                        if ( !empty($subjects)){
                            $sub_term = array_pop($subjects);
                            $sub_icon = get_field('subject_kla_icon', $sub_term);
                            $sub_bg_color = get_field('subject_background_color', $sub_term);
                        } else {
                            $sub_term = '';
                            $sub_icon = '';
                            $sub_bg_color = '';
                        }
                        $date = get_field('events_start_date');
                        $suburb = get_field('events_location_suburb');
                        $date_short = date("j M", strtotime($date));
                        
                         ?>
                        <a href="<?php the_permalink(); ?>" class="col-3" style="background-color:<?php echo $sub_bg_color; ?>;">
                            <div class="section-2-image" style="background-image: url('<?php echo $sub_icon; ?>');">
                                <span class="date"><?php echo $date_short; ?></span>
                            </div>
                            <div class="section-2-content">
                                <?php if ($term): ?>
                                    <div class="provider">
                                        <div class="provider-logo" style="background-image: url('<?php echo $asso_image; ?>');">
                                        </div>
                                        <div class="provider-title">
                                            <h3><?php echo get_the_terms( $repeat_events->the_ID(), 'ptc_associations', '')[0]->name; ?></h3>
                                        </div>
                                    </div>
                                <?php endif; ?>    
                                    <div class="section-2-title">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo $suburb; ?></p>
                                    </div>
                                    <div class="section-2-link">
                                        Read More <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        </div>
                    <?php else: ?>    
                    <h1>No Event Found</h1>
                    <?php endif; ?>
                <?php endif; ?> 
    </div>
</section>  

<?php include(TEMPLATEPATH . '/association-slider.php'); ?>

<?php wp_reset_query(); ?>  
<?php get_footer(); ?>