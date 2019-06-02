<footer>
            <div id="left-footer">
                <h3>Linki</h3>
                <p>
                    <ul>
                        <li>
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>">Lokalne Seo</a></li>
                        <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>">Optymalizacja Strony</a></li>
                        <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>
                        
                    </ul>
                </p>
                
            </div>
            <div id="left-footer-border">
                <h3>Kontakt</h3>
                <p>
                    <ul>
                        <!-- <li>
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('/oferta/lokalne-seo/'); ?>">Lokalne Seo</a></li>
                        <li><a href="<?php echo site_url('/oferta/optymalizacja-strony/'); ?>">Optymalizacja Strony</a></li>
                        <li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li> -->
                        <div itemscope itemtype=" http://schema.org/LocalBusiness ">
                    <li itemprop="name">SEOlokalni.pl</li>
                    <div itemprop="address" itemscope itemtype=" http://schema.org/PostalAddress">
                        <li itemprop="streetAddress">ul. Hansa Poelziga 2/2</li>
                        <li>
                            <span itemprop="postalCode">54-115</span>
                            <span itemprop="addressLocality">Wrocław</span>
</li>
                        <a href="tel:796189916">
                            <li>Tel.<span itemprop="telephone">+48 796 189 916</span></li>
                        </a>
                        <a href="mailto:biuro@seolokalni.pl?subject=Usługa pozycjonwania strony internetowej">
                            <li>E-mail:<span itemprop="email">biuro@seolokalni.pl</span></li>
                        </a>
                    </div>
                        
                    </ul>
                </p>
                
            </div>
            <div id="right-footer">
                <h3>Social Media</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Strona została stworzona przez PKK.</p>
            </div>
        </footer>
    </main>
    <?php wp_footer(); ?>
</body>

</html>