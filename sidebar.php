<div class="sidebar">
    <h2 class="sidebar-header">New & Noteworthy</h2>
    <ul class="sidebar-ul">
        <?php foreach (get_posts() as $post) : setup_postdata($post); ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="sidebar-a">
                    <span class="sidebar-date pull-right"><?php the_time(); ?></span>
                    <h3 class="sidebar-title"><?php the_title(); ?></h3>
                    <span class="sidebar-subtitle"><?php echo get_post_custom()['subtitle']['0']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
