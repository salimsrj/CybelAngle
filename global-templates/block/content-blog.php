<?php
/**
 * Block Name: Blog
 */
$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$post_per_page = get_field('post_per_page');

?>

<section class="blog-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="news-container"> -->
                <div class="blog-container">


                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1, // Number of posts per page
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

                    <div class="single-post">
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
                                <h2 class="title"><?php echo $title; ?></h2>
                            </a>
                            <div class="content">
                            <?php 
                                $content = get_the_content();
                                $trimmed_content = wp_trim_words( $content, 50, '..' );
                                echo '<p>'.$trimmed_content.'</p>'; ?>  
                            </div>
                            
                            <?php if (!empty($tags)) : ?>
                                    <div class="tags">
                                        <ul>
                                            <?php foreach ($tags as $tag) : ?>
                                            <li><a href="#" class="link"><?php echo $tag->name; ?></a></li> 
                                            <?php endforeach; ?>                                         
                                        </ul>
                                    </div>
                                    <?php endif; ?> 
                        </article>

                    </div>
                    <?php
                            endwhile;
                            wp_reset_postdata(); // Reset the query's post data
                            else :
                                echo "No news posts found.";
                            endif;
                            ?>

                    
                  

                    <div class="blog-list">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => $post_per_page, // Number of posts per page
                        'order' => 'DESC',
                        //'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Current page
                        'paged' => $paged, // Current page
                        'offset' => 1, 
                        
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
                                        
                                    <?php 
                                        $content = get_the_content();
                                        $trimmed_content = wp_trim_words( $content, 15, '..' );
                                        echo '<p>'.$trimmed_content.'</p>'; ?>                                    </div>
                                    <?php if (!empty($tags)) : ?>
                                    <div class="tags">
                                        <ul>
                                            <?php foreach ($tags as $tag) : ?>
                                            <li><a href="#" class="link"><?php echo $tag->name; ?></a></li> 
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
                            
                        <!-- <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-2.jpg" alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                    <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="#" class="link">In the News</a></li>                                            
                                        </ul>
                                    </div>
                                
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-3.jpg" alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                    <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="#" class="link">In the News</a></li>                                            
                                        </ul>
                                    </div>
                                
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-4.jpg" alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                    <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="#" class="link">In the News</a></li>                                            
                                        </ul>
                                    </div>
                                
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-5.jpg" alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                    <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="#" class="link">In the News</a></li>                                            
                                        </ul>
                                    </div>
                                
                            </article>
                        </div>

                        <div class="item">
                            <article>
                                <div class="image-container">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-img-6.jpg" alt="news image">
                                </div>
                                <div class="post-meta">
                                    <span>5 min read</span>&nbsp;&nbsp;•&nbsp;&nbsp;<span>20 Jan 2022</span>
                                </div>
                                    <a href="#">
                                    <h3 class="title">Why your security strategy needs to be preemptive</h3>
                                    </a>
                                    <div class="content">
                                        <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published on betanews.com As cyberattacks...</p>
                                    </div>
                                    <div class="tags">
                                        <ul>
                                            <li><a href="#" class="link">In the News</a></li>                                            
                                        </ul>
                                    </div>
                                
                            </article>
                        </div> -->

                        

                       

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