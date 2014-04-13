<?php get_header(); ?>

<div class="single">
    <div class="grid">
        <div class="unit two-thirds">
            <div class="single-post">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2 class="single-post-title"><?php the_title(); ?></h2>
                    <div class="post-content single-post-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="unit one-third">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

