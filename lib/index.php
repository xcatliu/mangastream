<?php get_header(); ?>

<div class="index">
    <div class="grid">
        <div class="unit two-thirds">
            <div class="index-top3">
                <div class="grid">
                    <?php $mangaCategoryId = get_term_by('name', '漫画', 'category') -> term_id; ?>
                    <?php foreach (get_posts(array('category' => $mangaCategoryId, 'posts_per_page' => 3)) as $post) : setup_postdata($post); ?>
                        <div class="unit one-third">
                            <a href="<?php the_permalink(); ?>" class="index-top3-a">
                                <div class="index-top3-bg" style="background:url('<?php echo get_post_custom()['preImage']['0']; ?>');">
                                    <div class="index-top3-header-bg">
                                        <div class="index-top3-header">
                                            <h2 class="index-top3-title"><?php the_title(); ?></h2>
                                            -
                                            <span class="index-top3-subtitle"><?php echo get_post_custom()['subtitle']['0']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $newsCategoryId = get_term_by('name', '新闻', 'category') -> term_id; ?>
            <?php foreach (get_posts(array('category' => $newsCategoryId)) as $post) : setup_postdata($post); ?>
                <div class="index-post">
                    <h2 class="index-post-header"><a href="<?php the_permalink(); ?>" class="index-post-header-a"><?php the_title(); ?></a></h3>
                    <span class="index-post-date"><?php the_time(); ?></span>
                    <div class="post-content index-post-summary">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-small">0 comments</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="unit one-third">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

