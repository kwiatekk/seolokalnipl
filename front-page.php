<?php get_header(); ?>

<div id="banner">
    <h1>Lokalne SEO</h1>
    <h3 class="h3-banner">Zwiększ liczbę klientów swojego lokalnego biznesu.</h3>
</div>
<main>
    <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="section-heading">Blog</h2>
    </a>
    <section>

    <?php

     $args = array(

        'post_type' => 'post',
        'posts_per_page' => 2,
     );   

     $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts ->the_post();
        


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
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Więcej...</a>
            </div>
        </div>
       <?php }
       wp_reset_query(); ?>
    </section>

    <h2 class="section-heading">Oferta</h2>
    <section>
        <?php

$args = array(

'post_type' => 'oferta',
'posts_per_page' => 2,
);   

$oferta = new WP_Query($args);

while($oferta->have_posts()){
   $oferta->the_post();



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
       <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
       <a href="<?php the_permalink(); ?>" class="btn-readmore">Więcej...</a>
   </div>
</div>
<?php }
wp_reset_query(); ?>
    </section>
    <h2 class="section-heading">Zainwestuj w Lokalne SEO</h2>
    <section id="section-source">
        <h3>Dlaczego warto inwestować w pozycjonowanie lokalne?</h3>
        <p>
        Dzięki <b>lokalnemu seo</b> zyskasz klientów bezpośrednio z twojej okolicy, dodatkowo redukuję ono znacząco koszty w <b>pozycjonowaniu</b> (<b>fraza ogólna</b> np. kwiaciarnia, jest zdominowana przez duże internetowe poczty kwiatowe i konkurencja z nimi wymaga dużego wkładu finansowego). Używając, więc <b>regionalnych fraz</b> np. kwiaciarnia Wrocław, mamy szanse zaistnieć w wyszukiwarce i zostać regionalnym liderem z długotrwałą renomą.
        </p>
    </section>
    <?php get_footer(); ?>