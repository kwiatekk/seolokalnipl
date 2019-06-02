<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">
       Błąd 404?
    </h2>
    <img src="http://source.unsplash.com/640x480/?bikes">

    <h3>Strona nieznaleziona.</h3>
    <ul>
                <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>">Lokalne Seo</a></li>
                <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>">Optymalizacja Strony</a></li>
                <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
            </ul>
</div>

<?php get_footer(); ?>