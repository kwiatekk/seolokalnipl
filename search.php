<?php get_header(); ?>



    
        <h2 class="page-heading">Wynik wyszukiwania dla <?php echo get_search_query(); ?></h2>
    </a>

    <?php if(have_posts()) { ?>
    <section>

    <?php



        while(have_posts()){
        the_post();
        


    ?>
        <div class="card">
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                        alt="">
                </a>
            </div>
            <div class="card-description">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <div class="card-meta">
                Dodano przez <?php the_author(); ?> dnia <?php the_time('F j, Y'); ?> <?php if(get_post_type() == 'post') { ?>
                     w <a href="#"><?php echo get_the_category_list(',') ?></a>
                    <?php } ?>
                </div>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Więcej...</a>
            </div>
        </div>
       <?php }
       wp_reset_query(); ?>
    </section>
    <?php } else { ?>
    
        <div class="no-results">
            <h2>Nie znaleziono takiego wyniku wyszukiwania.</h2>
            <h3>Spróbuj jeszcze raz, albo sprawdź poniższe linki:</h3>
            <ul>
                <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>">Lokalne Seo</a></li>
                <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>">Optymalizacja Strony</a></li>
                <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
            </ul>
        </div>

             <?php   }
    ?>

    <div class="pagination">
    <?php echo paginate_links(); ?>
    
    </div>

    
    <?php get_footer(); ?>