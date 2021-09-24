
    <footer class="section-footer">

 
        <div class="social-media">
         <i class="fab fa-facebook-square"></i>
         <i class="fab fa-twitter-square"></i>
         <i class="fab fa-instagram-square"></i>
        </div>

        <div class="links">

        <?php
        // nous allons afficher le menu "nav". Ce menu a été défini dans le backoffice de wp Apparence -> Personnaliser -> Menu

        // IMPORTANT WP afficher un menu wordpress
        // DOC https://developer.wordpress.org/reference/functions/wp_nav_menu/
        wp_nav_menu([
            'theme_location' => 'footer_menu', // première clé : quel menu nous souhaitons afficher
            'container' => 'nav',    // la balise HTML qui sera utilisée pour encapsuler le menu
         
            'echo' => true,    // permet d'afficher le menu
            ]);

        ?>
        </div>
 

    </footer>



    <?php
    wp_footer();
    ?>


</body>

</html>