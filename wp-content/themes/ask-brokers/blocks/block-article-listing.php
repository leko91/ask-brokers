<div class="article-listing">
    <?php while(have_posts()): the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="article-listing__article">
            <img src="http://via.placeholder.com/240x160" alt="" class="article-listing__image">

            <div class="article-listing__content">
                <span class="article-listing__title"><?php the_title(); ?></span>

                <div class="article-listing__text">
                    <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20); ?>
                </div>
            </div>
        </a>
    <?php endwhile; ?>
</div>
