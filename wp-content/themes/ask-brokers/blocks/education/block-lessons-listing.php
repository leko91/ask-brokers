<div class="lesson">
    <?php $educationArticles = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'education',
    )); ?>

    <?php while($educationArticles->have_posts()): $educationArticles->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="lesson__article">
            <img src="http://via.placeholder.com/240x160" alt="" class="lesson__image">

            <div class="lesson__content">
                <div>
                    <span class="lesson__title"><?php the_title(); ?></span>

                    <div class="lesson__text">
                        <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20); ?>
                    </div>
                </div>

                <?php $firstCategory = get_the_category(); ?>
                <span class="lesson__category"><?php echo $firstCategory[0]->cat_name; ?></span>
            </div>
        </a>
    <?php endwhile; ?>
</div>
