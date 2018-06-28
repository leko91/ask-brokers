<div class="education-categories">
    <span class="education-categories__title">
        <i class="material-icons">format_list_bulleted</i>
        Categories
    </span>

    <ul class="education-categories__list">
        <?php $educationArticles = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'education',
            'order' => 'ASC'
        )); ?>

        <li class="education-categories__list-item">
            <a href="<?php echo site_url('/education') ?>" class="education-categories__list-link">All articles</a>
        </li>
        <?php while($educationArticles->have_posts()): $educationArticles->the_post(); ?>
            <li class="education-categories__list-item">
                <a href="<?php the_permalink(); ?>" class="education-categories__list-link<?php if ($post->post_parent > 0 ) echo ' education-categories__list-link--subpage' ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
