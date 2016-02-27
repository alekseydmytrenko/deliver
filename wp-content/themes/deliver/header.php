<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title><?php
        if (is_home() || is_front_page()) {
            bloginfo('name');
        } else {
            wp_title();
        }?></title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
<header class="h-page">
    <div class="container clear">
        <nav class="main-nav clear">
            <div class="mobile-menu clear">
                <h1 class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Deliver"></a></h1>

                <button type="button" id="btn-toggle" class="menu-toggle">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="social">
                    <?php
                    $args = [
                        'theme_location' => 'social'
                    ];

                    wp_nav_menu($args);?>
                </div>
            </div>

            <div class="main-menu clear" id="menu-nav-open">
                <div class="main-nav-items">
                    <?php
                    $args = [
                        'theme_location' => 'primary'
                    ];
                    wp_nav_menu($args);?>
                </div>
                <div class="search-nav-item">
                    <a href="#"><span class="fa fa-search"></span></a>
                </div>
            </div>
        </nav>
    </div>
    <div class="page-title">
        <div class="container">
            <?php the_title();?>
        </div>
    </div>
</header>

<main class="m-page">
    <div class="container clear">