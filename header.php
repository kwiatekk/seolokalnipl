<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
    <title>Lokalne SEO,optymalizacja strony,zwiększy twój biznes - SEOlokalni.pl</title>
    
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">Home</a>
            </li>
            <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
            <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>">Lokalne Seo</a></li>
            <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>">Optymalizacja Strony</a></li>
            <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>

            <div class="searchbox-slide-menu">
                <?php get_search_form(); ?>
            </div>
        </ul>
    </div>
    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
                    alt="logo seolokalni.pl - Lokalne SEO,optymalizacja strony,zwiększy twój biznes.">
            </a>
            
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>"
                <?php if(is_front_page()) echo 'class="active"' ?>
                >Home</a>
            </li>
            <li><a href="<?php echo site_url('/blog'); ?>"
            <?php if(get_post_type() == 'post') echo 'class="active"' ?>
            >Blog</a></li>
            <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>"
            <?php if(is_page('oferta/lokalne-seo')) echo 'class="active"' ?>
            >Lokalne Seo</a></li>
            <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>"
            <?php if(is_page('oferta/lokalne-seo')) echo 'class="active"' ?>
            >Optymalizacja Strony</a></li>

            <li><a href="<?php echo site_url('/kontakt'); ?>"
            <?php if(is_page('kontakt')) echo 'class="active"' ?>
            >Kontakt</a></li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
    <?php get_search_form(); ?>
    </div>

    <?php if(!is_front_page()){ ?>
        <main>

    <?php } ?>