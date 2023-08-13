<?php
/**
 * Block Name: News
 */
$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$post_per_page = get_field('post_per_page');

?>

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="news-container">
                    <div class="section-head">
                        <?php if($pre_title != ''): ?>
                        <span class="pre-title"><?php echo $pre_title; ?></span>
                        <?php endif; ?>

                        <?php if($title != ''): ?>
                        <h2 class="section-title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                    </div>

                    <div class="news-list">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'news',
                        'posts_per_page' => $post_per_page, // Number of posts per page
                        'order' => 'DESC',
                        //'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Current page
                        'paged' => $paged, // Current page
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                            $title = get_the_title();
                            $content = get_the_content();
                            $time = get_the_time('F j, Y');
                            $featured_image = get_the_post_thumbnail_url();
                            $taxonomy_terms = wp_get_post_terms(get_the_ID(), 'news-category');
                            $tags = get_the_tags();

                            ?>
                        <div class="item">
                            <article>
                                <?php if ($featured_image) : ?>
                                    <div class="image-container">
                                        <img src="<?php echo $featured_image; ?>" alt="<?php echo $title; ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span><?php echo $time; ?></span>
                                </div>
                                    <a href="<?php echo get_the_permalink();?>">
                                    <h3 class="title"><?php echo $title; ?></h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <?php if (!empty($taxonomy_terms)) : ?>
                                    <div class="tags">
                                        <ul>
                                            <?php foreach ($taxonomy_terms as $term) : ?>
                                            <li><a href="#" class="link"><?php echo $term->name; ?></a></li> 
                                            <?php endforeach; ?>                                         
                                        </ul>
                                    </div>
                                    <?php endif; ?> 

                                    <!-- <?php if ($tags) : ?>
                                    <div class="tags">
                                        <ul>
                                            <?php foreach ($tags as $tag) : ?>
                                            <li><a href="#" class="link"><?php echo $tag->name; ?></a></li> 
                                            <?php endforeach; ?>                                         
                                        </ul>
                                    </div>
                                    <?php endif; ?> -->

                                    
                                
                            </article>
                        </div>

                        <?php
                            endwhile;
                            ?>

                    </div>
                    


                    <?php
                           // Bootstrap 4 Pagination
                            // echo '<div class="pagination">';
                            // echo paginate_links(array(
                            //     'total' => $news_query->max_num_pages,
                            //     'prev_text' => __('« Previous'),
                            //     'next_text' => __('Next »'),
                            // ));
                            // echo '</div>';

                            // understrap_pagination($news_query->max_num_pages);
                            understrap_pagination( [
                                'total' => $news_query->max_num_pages,
                            ] );

                            wp_reset_postdata(); // Reset the query's post data
                        else :
                            echo "No news posts found.";
                        endif;
                        ?>
                </div>
                
            </div>
        </div>
    </div>
</section>