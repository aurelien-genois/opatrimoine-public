<?php
get_header();
the_post();

?>
<main class="page-content">
    <h2 class="title-presentation"><?= get_the_title(); ?></h2>

    <!-- get_the_content() " does not pass the content through the the_content filter", so html tags is not render perfectly -->
    <?php the_content() ?>
    
</main>

<?php 
get_footer();
?>