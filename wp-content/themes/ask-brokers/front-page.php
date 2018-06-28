<?php get_header() ?>

<div class="page">
    <div class="container flex-section tab-content">
        <div id="for-you" class="flex-section__60 pr-10 tab-pane fade show active">
            <?php $homepageArticles = new WP_Query(array(
                'posts_per_page' => 8,
            )); ?>

            <?php while($homepageArticles->have_posts()): $homepageArticles->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="home-article<?php if(has_category('original')) echo ' home-article--original' ?>">
                    <img src="http://via.placeholder.com/200x200" alt="" class="home-article__image">

                    <div class="home-article__content">
                        <div>
                            <span class="home-article__title"><?php the_title(); ?></span>

                            <div class="home-article__text">
                                <?php echo has_excerpt() ? wp_trim_words(get_the_excerpt(), 20) : wp_trim_words(get_the_content(), 20); ?>
                            </div>
                        </div>

                        <?php $firstCategory = get_the_category(); ?>
                        <span class="home-article__source"><?php echo $firstCategory[0]->cat_name; ?></span>
                    </div>
                </a>
            <?php endwhile; ?>

            <?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="8" offset="8" pause="true" scroll="false" transition_container="false" images_loaded="true" button_label="Load more articles"]') ?>
        </div>

        <div id="popular" class="flex-section__40 pl-10 tab-pane fade">
            <div class="trading-intelligence">
                <div class="trading-intelligence__title">
                    <i class="material-icons">notifications</i>
                    Trading intelligence
                </div>

                <div class="trading-intelligence__articles">
                    <?php $tradingIntelligenceArticles = new WP_Query(array(
                        'posts_per_page' => 20,
                        'post_type' => 'trading_intelligence',
                        'meta_query' => array(
                            array(
                                'compare' => '>=',
                                'value' => date('U', strtotime('-1 day')),
                                'type' => 'numeric'
                            )
                        )
                    )) ?>

                    <?php while($tradingIntelligenceArticles->have_posts('trading_intelligence')): $tradingIntelligenceArticles->the_post('trading_intelligence'); ?>

                        <article class="trading-intelligence__article<?php echo date('U', strtotime('-5 minutes')) < get_the_time('U') ? ' fresh' : '' ?>">
                            <img src="http://via.placeholder.com/114x70" alt="" class="trading-intelligence__image">

                            <div class="trading-intelligence__content">
                                <div class="trading-intelligence__text"><?php the_title(); ?></div>

                                <div class="trading-intelligence__info">
                                    <!-- <a href="#" class="trading-intelligence__link">
                                        <i class="material-icons">link</i>
                                    </a> -->
                                    <span class="trading-intelligence__time"><?php echo date('U', strtotime('-5 minutes')) < get_the_time('U') ? 'Just now' : get_the_time('H:i') ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="flex-section">
                <div class="flex-section__inner-right pr-10">
                    <div class="trending-news">
                        <a href="<?php echo get_post_type_archive_link('trending_news') ?>" class="trending-news__title">
                            <i class="material-icons">whatshot</i>
                            Trending news
                        </a>

                        <div class="trending-news__articles">
                            <?php $trendingNews = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_type' => 'trending_news'
                            )); ?>

                            <?php while($trendingNews->have_posts('trending_news')): $trendingNews->the_post('trending_news') ?>
                                <a href="<?php the_permalink(); ?>" class="trending-news__article">
                                    <p class="trending-news__text"><?php the_title(); ?></p>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <?php get_template_part( 'blocks/block', 'account-banner' ); ?>

                    <div class="trending-news">
                        <a href="<?php echo get_post_type_archive_link('news_from_europe') ?>" class="trending-news__title">
                            <i class="material-icons">public</i>
                            News from Europe
                        </a>

                        <div class="trending-news__articles">
                        <?php $newsFromEurope = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_type' => 'news_from_europe'
                            )); ?>

                            <?php while($newsFromEurope->have_posts('trending_news')): $newsFromEurope->the_post('trending_news') ?>
                                <a href="<?php the_permalink(); ?>" class="trending-news__article">
                                    <p class="trending-news__text"><?php the_title(); ?></p>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

                <div class="flex-section__inner-right pl-10">
                    <?php get_template_part( 'blocks/block', 'stock-tracker' ); ?>

                    <?php get_template_part( 'blocks/block', 'top-brokers' ); ?>
                </div>
            </div>
        </div>

        <div id="tracker" class="tab-pane fade d-md-none">
            <?php get_template_part( 'blocks/block', 'stock-tracker' ); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
