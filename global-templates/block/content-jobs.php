
<?php
/**
 * Block Name: Jobs
 *
 */
$pre_title = get_field('pre_title');
$title = get_field('title');
$pre_title = get_field('pre_title');
$content = get_field('content');
$job_per_page = get_field('job_per_page');
?>
<section class="join-our-team">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-content">
                    <?php if($pre_title != ''): ?>
                    <span class="pre-title"><?php echo $pre_title; ?></span>
                    <?php endif; ?>
                    <?php if($title != ''): ?>
                    <h2 class="title"><?php echo $title; ?></h2>
                    <?php endif; ?>
                    <div class="content">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="job-list">  
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'careers',
                        'posts_per_page' => $job_per_page, // Number of posts per page
                        'order' => 'DESC',
                        //'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Current page
                        //'paged' => $paged, // Current page
                    );

                    $career_query = new WP_Query($args);

                    if ($career_query->have_posts()) :
                        while ($career_query->have_posts()) : $career_query->the_post();
                            $title = get_the_title();
                            $content = get_the_content();
                            $time = get_the_time('F j, Y');
                            $featured_image = get_the_post_thumbnail_url();
                            $taxonomy_terms = wp_get_post_terms(get_the_ID(), 'job_category');
                            $tags = get_the_tags();
                            $job_location = get_field('job_location', get_the_ID());
                            $job_type = get_field('job_type', get_the_ID());
                            $application_url = get_field('application_url', get_the_ID());

                            ?>

                    <div class="item">
                        <article>
                            <?php if (!empty($taxonomy_terms)) : 
                                $i = 1;
                                ?>
                                <?php foreach ($taxonomy_terms as $term) :?>
                                    <span class="category"><?php if($i > 1)echo ", &nbsp;"; echo $term->name; ?></span>
                                <?php $i++;
                                endforeach; ?>
                            <?php endif; ?> 
                            <h3 class="title"><?php echo $title; ?></h3>
                            <div class="content">
                                <?php 
                                $content = get_the_content();
                                $trimmed_content = wp_trim_words( $content, 50, '..' );
                                echo '<p>'.$trimmed_content.'</p>'; ?>  
                            </div>
                            <div class="job-meta">
                                <ul>
                                    <li>
                                        <span class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon-location-gray.png" alt=""></span>
                                        <span><?php echo $job_location; ?></span>
                                    </li>
                                    <li>
                                        <span class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Icon-clock-gray.png" alt=""></span>
                                        <span><?php echo $job_type; ?></span>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php echo $application_url; ?>" target="_blank" class="link">View job</a>
                        </article>
                    </div>


                     <?php                      
                    endwhile; 
                         
                            // understrap_pagination( [
                            //     'total' => $career_query->max_num_pages,
                            // ] );

                            // wp_reset_postdata(); // Reset the query's post data
                        else :
                            echo "No news posts found.";
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
