<?php get_header(); ?>

<div class="index">
    <div class="grid">
        <div class="unit two-thirds">
            <div class="index-top3">
                <div class="grid">
                    <div class="unit one-third">
                        <a href="javascript:void(0);" class="index-top3-a">
                            <div class="index-top3-bg" style="background:url('http://img.mangastream.com/cdn/feature/0236.png');">
                                <div class="index-top3-header-bg">
                                    <div class="index-top3-header">
                                        <h2 class="index-top3-title">海贼王 500</h2>
                                        -
                                        <span class="index-top3-subtitle">balabala</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit one-third">
                        <a href="javascript:void(0);" class="index-top3-a">
                            <div class="index-top3-bg" style="background:url('http://img.mangastream.com/cdn/feature/0236.png');">
                                <div class="index-top3-header-bg">
                                    <div class="index-top3-header">
                                        <h2 class="index-top3-title">海贼王 500</h2>
                                        -
                                        <span class="index-top3-subtitle">balabala</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="unit one-third">
                        <a href="javascript:void(0);" class="index-top3-a">
                            <div class="index-top3-bg" style="background:url('http://img.mangastream.com/cdn/feature/0236.png');">
                                <div class="index-top3-header-bg">
                                    <div class="index-top3-header">
                                        <h2 class="index-top3-title">海贼王 500</h2>
                                        -
                                        <span class="index-top3-subtitle">balabala</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="index-post">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="index-post-header"><a href="<?php the_permalink(); ?>" class="index-post-header-a"><?php the_title(); ?></a></h3>
                    <span class="index-post-date"><?php the_time(); ?></span>
                    <div class="post-content index-post-summary">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-small">0 comments</a>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="unit one-third">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

