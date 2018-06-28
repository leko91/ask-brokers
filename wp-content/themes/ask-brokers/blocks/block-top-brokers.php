<div class="top-brokers">
    <div class="top-brokers__title">
        <i class="material-icons">star</i>
        Top 5 Brokers
    </div>

    <div class="top-brokers__links">
        <?php $totalStarsArray = [4.7, 4, 3, 3.7, 3.3]; ?>
        <?php $brokerageArticles = new WP_Query(array(
            'posts_per_page' => 5,
            'post_type' => 'brokerage'
        )); ?>

        <?php $counter = 0; ?>
        <?php if($brokerageArticles->have_posts()): while($brokerageArticles->have_posts()): $brokerageArticles->the_post(); ?>
            <?php if(have_rows('stars_rating')): while(have_rows('stars_rating')): the_row(); ?>
                <?php $select = get_sub_field_object('rating_amount'); ?>
                <?php $value = get_sub_field('rating_amount'); ?>
                <?php foreach($select['choices'] as $key => $amount): ?>
                    <?php if($key === $value): ?>
                        <?php $totalValue += $amount; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endwhile; endif; ?>

            <?php if(have_rows('stars_rating')): ?>
                <?php $totalStars = round($totalValue / count(get_field('stars_rating')), 1); ?>
                <a href="<?php the_permalink(); ?>" class="top-brokers__single">
                    <img src="http://via.placeholder.com/30x30" alt="" class="top-brokers__image">

                    <span class="top-brokers__name"><?php echo ++$counter; ?>. <?php the_title(); ?></span>

                    <div class="top-brokers__rating"><?php echo $totalStars; ?><i class="material-icons">star</i></div>
                </a>
                <?php array_push($totalStarsArray, $totalStars); ?>
                <?php $totalValue = 0; ?>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
</div>
