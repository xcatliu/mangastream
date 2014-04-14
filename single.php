<?php get_header(); ?>

<div class="single">
    <div class="grid">
        <?php the_post(); ?>
        <?php $mangaCategoryId = get_term_by('name', '漫画', 'category') -> term_id; ?>
        <?php $isMangaPost = (get_the_category()[0] -> term_id === $mangaCategoryId || get_the_category()[0] -> category_parent === $mangaCategoryId) ?>
        <?php if ($isMangaPost) : ?>
            <div class="unit whole">
                <div class="single-post">
                    <h2 class="single-post-title"><?php the_title(); ?></h2>
                    <div class="post-content single-post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="unit two-thirds">
                <div class="single-post">
                    <h2 class="single-post-title"><?php the_title(); ?></h2>
                    <div class="post-content single-post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="unit one-third">
                <?php get_sidebar(); ?>
            </div>
        <?php endif ?>
    </div>
</div>

