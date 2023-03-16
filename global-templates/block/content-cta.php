<?php
/**
 * Block Name: CTA
 *
 */

$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$article = get_field('article');
?>
<section class="cta" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/images/cta-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if($title != ''): ?>
                <h2 class="title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php echo $content; ?>
                <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>" class="btn btn-sweet"><?php echo $button['label']; ?></a>
                <?php endif; ?>
            </div>

            <div class="col-md-6">
                <div class="article-box">
                    <article>
                        <div class="image-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta-article-img.jpg" alt="">
                        </div>
                        <div class="post-meta">
                            <span>5 min read</span> • <span>20 Jan 2022</span>
                        </div>
                        <h3 class="title">Why your security strategy needs to be preemptive</h3>
                        <div class="content">
                            <p>Q&A on preemptive cybersecurity with CybelAngel’s CISO Todd Carroll Originally published
                                on betanews.com As cyberattacks...</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>