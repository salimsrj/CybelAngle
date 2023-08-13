<?php
/**
 * Block Name: Our Team
 */

$pre_title = get_field('pre_title');
$title = get_field('title');
$content = get_field('content');
$buttons = get_field('buttons');
$team_members = get_field('team_members');



?>
<section class="our-team">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team-container">
                    <div class="left-box">
                        <?php if($pre_title != ''): ?>
                        <span class="pre-title"><?php echo $pre_title; ?></span>
                        <?php endif; ?>
                        <?php if($title != ''): ?>
                        <h2 class="section-title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <div class="content">
                            <?php echo $content; ?>
                        </div>
                        <?php if($buttons): ?>
                        <div class="buttons-container">
                            <ul>
                                <?php if($buttons['button_one']['url'] != ''): ?>
                                <li><a href="<?php echo $buttons['button_one']['url']; ?>" class="btn btn-white"><?php echo $buttons['button_one']['label']; ?></a></li>
                                <?php endif; ?>
                                <?php if($buttons['button_two']['url'] != ''): ?>
                                <li><a href="<?php echo $buttons['button_two']['url']; ?>" class="btn btn-sweet"><?php echo $buttons['button_two']['label']; ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="right-box">
                        <?php if($team_members): ?>
                        <div class="team-members">
                            <?php foreach($team_members as $member): ?>
                            <div class="member" style="background: url(<?php echo $member['image']['url']; ?>);background-position: center center;
                                background-size: cover;">
                                <div class="info" >
                                    <h3 class="name"><?php echo $member['name']; ?></h3>
                                    <span class="designation"><?php echo $member['designation']; ?></span>
                                    <div class="content">
                                     <?php echo $member['content']; ?>
                                    </div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-dribbble" aria-hidden="true"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                       
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>