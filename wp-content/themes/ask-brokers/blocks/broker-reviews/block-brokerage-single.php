<div class="page">
    <div class="container flex-section">
        <div class="flex-section__inner-left pr-10">
            <?php get_template_part( 'blocks/block', 'account-banner' ); ?>
        </div>
        <div class="flex-section__inner-wide pl-10 pr-10">
            <?php get_template_part( 'blocks/block', 'article-single' ); ?>
        </div>
        <div class="flex-section__inner-right pl-10">
            <a href="#" class="button brokerage__button">Visit brokers website</a>

            <ul class="brokerage__review">
                <li class="brokerage__review-item">
                    <span>Commission</span>
                    <span>6.95$</span>
                </li>
                <li class="brokerage__review-item">
                    <span>Account Minimum</span>
                    <span>500$</span>
                </li>
                <li class="brokerage__review-item">
                    <span>Monthly cost to borrow</span>
                    <span>2%</span>
                </li>
            </ul>

            <ul class="brokerage__rating">
                <li class="brokerage__rating-title">
                    <i class="material-icons">star</i>
                    Broker rating
                </li>

                <?php if(have_rows('stars_rating')): while(have_rows('stars_rating')): the_row(); ?>
                    <?php $select = get_sub_field_object('rating_amount'); ?>
                    <?php $value = get_sub_field('rating_amount'); ?>
                    <?php $totalValue; ?>
                    <li class="brokerage__rating-item">
                        <span><?php the_sub_field('rating_criteria'); ?></span>
                        <span>
                            <?php foreach($select['choices'] as $key => $amount): ?>
                                <?php if($key === $value): ?>
                                    <?php $totalValue += $amount; ?>
                                    <?php for($i = 0; $i < $amount; $i++): ?>
                                        <i class="material-icons">star</i>
                                    <?php endfor; ?>
                                    <?php for($j = $amount; $j < 5; $j++): ?>
                                        <i class="material-icons">star_border</i>
                                    <?php endfor; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </span>
                    </li>
                <?php endwhile; endif; ?>

                <li class="brokerage__rating-item brokerage__rating-item--total">
                    <span>Total score</span>
                    <span>
                        <?php $totalStars = round($totalValue / count(get_field('stars_rating'))); ?>
                        <?php for($i = 0; $i < $totalStars; $i++): ?>
                            <i class="material-icons">star</i>
                        <?php endfor; ?>
                        <?php for($j = $totalStars; $j < 5; $j++): ?>
                            <i class="material-icons">star_border</i>
                        <?php endfor; ?>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>

