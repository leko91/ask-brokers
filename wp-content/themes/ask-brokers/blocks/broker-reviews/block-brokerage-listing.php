<div class="brokerage">
    <?php $brokerageArticles = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'brokerage',
    )); ?>

    <?php while($brokerageArticles->have_posts()): $brokerageArticles->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="brokerage__article">
            <img src="http://via.placeholder.com/240x160" alt="" class="brokerage__image">

            <div class="brokerage__content">
                <span class="brokerage__title"><?php the_title(); ?></span>

                <div class="brokerage__text">
                    <?php while(have_posts()): the_post(); ?>
                        <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20); ?>
                    <?php endwhile; ?>
                </div>

                <div class="brokerage__stars">
                    <?php if(have_rows('stars_rating')): while(have_rows('stars_rating')): the_row(); ?>
                        <?php $select = get_sub_field_object('rating_amount'); ?>
                        <?php $value = get_sub_field('rating_amount'); ?>
                        <?php $totalValue; ?>
                        <?php foreach($select['choices'] as $key => $amount): ?>
                            <?php if($key === $value): ?>
                                <?php $totalValue += $amount; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endwhile; endif; ?>

                    <?php $totalStars = round($totalValue / count(get_field('stars_rating'))); ?>
                    <?php for($i = 0; $i < $totalStars; $i++): ?>
                        <i class="material-icons">star</i>
                    <?php endfor; ?>
                    <?php for($j = $totalStars; $j < 5; $j++): ?>
                        <i class="material-icons">star_border</i>
                    <?php endfor; ?>
                </div>
            </div>
        </a>
        <?php $totalValue = 0; ?>
    <?php endwhile; ?>
</div>
