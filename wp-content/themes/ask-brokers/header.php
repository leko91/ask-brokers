<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ask Brokers | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php if(is_front_page()) echo 'class="body--home"'; ?>>
    <?php is_front_page() ? get_template_part( 'blocks/block', 'stock-banner' ) : '' ?>

    <nav class="navbar navbar-dark navbar-expand-xl">
        <div class="container">
            <?php if(is_page(array('broker-reviews', 'education'))): ?>
                <a href="/">
                    <span class="navbar-brand"></span>
                    <span class="navbar-brandText"><?php the_title() ?></span>
                </a>
            <?php else: ?>
                <a class="navbar-brand navbar-brand--homepage" href="/"></a>
            <?php endif; ?>

            <?php if(is_front_page()): ?>
                <div class="dropdown filter d-none d-sm-block">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="material-icons">format_list_bulleted</i>
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Chapter 1</a>
                        <a class="dropdown-item" href="#">Chapter 2</a>
                        <a class="dropdown-item" href="#">Chapter 3</a>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(is_front_page()): ?>
                <div class="search d-none d-md-block">
                    <form class="search__form">
                        <i class="material-icons">search</i>
                        <input id="searchField" class="search__input form-control" type="search" placeholder="Search">
                        <div id="searchLoader" class='search__loader'></div>
                    </form>

                    <div id="searchResults" class="search__results"></div>
                </div>
            <?php endif; ?>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navigationCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigationCollapse">
                <?php if(is_front_page()): ?>
                    <div class="search d-md-none">
                        <form class="search__form">
                            <i class="material-icons">search</i>
                            <input id="searchField-mobile" class="search__input form-control" type="search" placeholder="Search">
                            <div id="searchLoader-mobile" class='search__loader'></div>
                        </form>

                        <div id="searchResults-mobile" class="search__results"></div>
                    </div>
                <?php endif; ?>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item<?php if(is_front_page()) echo ' active' ?>">
                        <a class="nav-link" href="<?php echo site_url('/') ?>">News</a>
                    </li>
                    <li class="nav-item dropdown nav-education<?php if(is_page('education')) echo ' active' ?>">
                        <a class="nav-link dropdown-toggle" href="<?php echo site_url('/education') ?>" id="navbarDropdown" role="button">Education</a>
                        <div class="dropdown-menu">
                        <?php $educationParents = new WP_Query(array(
                            'posts_per_page' => -1,
                            'post_type' => 'education',
                            'post_parent' => 0
                        )); ?>

                        <?php while($educationParents->have_posts()): $educationParents->the_post(); ?>
                            <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endwhile; ?>
                        </div>
                    </li>
                    <?php if(is_user_logged_in()): ?>
                        <li class="nav-item<?php if(is_page('account') || is_page('login') || is_page('create-account')) echo ' active' ?>">
                            <a href="<?php echo site_url('/account'); ?>" class="nav-link">Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo wp_logout_url(site_url('/')); ?>" class="nav-link">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item<?php if(is_page('login')) echo ' active' ?>">
                            <a href="<?php echo site_url('/login'); ?>" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item<?php if(is_page('create-account')) echo ' active' ?>">
                            <a href="<?php echo site_url('/create-account'); ?>" class="nav-link">Signup</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item<?php if(is_page('broker-reviews')) echo ' active' ?> d-xl-none">
                        <a href="<?php echo site_url('/broker-reviews'); ?>" class="nav-link">Broker reviews</a>
                    </li>
                </ul>

                <a href="/broker-reviews" class="button d-none d-xl-block">Broker reviews</a>
            </div>

            <?php if(is_front_page()): ?>
                <ul class="nav nav-tabs d-md-none">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#for-you">For you</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#popular">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tracker">Tracker</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
