
    <footer class="section-footer">

 
        <div class="social-media">
         <i class="fab fa-facebook-square"></i>
         <i class="fab fa-twitter-square"></i>
         <i class="fab fa-instagram-square"></i>
        </div>

        <div class="links">

        <?php
        wp_nav_menu([
            'theme' => 'footer_menu', 
            'container' => 'nav',
            'echo' => true,
            ]);

        ?>
        </div>
 

    </footer>



    <?php
    wp_footer();
    ?>


</body>

</html>