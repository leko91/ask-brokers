<?php get_header(); ?>

<div class="page">
    <div class="container flex-section">
        <div class="flex-section__inner-left pr-10">
            <?php get_template_part( 'blocks/block', 'account-banner' ); ?>
        </div>
        <div class="flex-section__inner-wide pl-10 pr-10">
            <?php get_template_part( 'blocks/block', 'article-single' ); ?>
        </div>
        <div class="flex-section__inner-right pl-10">
        </div>
    </div>
</div>

<?php get_footer(); ?>
