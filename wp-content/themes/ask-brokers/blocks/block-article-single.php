<?php while(have_posts()): the_post(); ?>
    <div class="article-single">
        <div class="article-single__article">
            <img src="http://via.placeholder.com/240x160" alt="" class="article-single__image">

            <div class="article-single__content">
                <span class="article-single__title"><?php the_title(); ?></span>

                <div class="article-single__text">
                    <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20); ?>
                </div>

                <span class="article-single__date"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        <div class="article-single-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
