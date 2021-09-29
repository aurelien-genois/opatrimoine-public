<?php

?>

<article>
    <strong><?= get_field('city', the_ID()) ?> </strong>
    <?php the_title() ?>
    <?php the_terms(the_ID(), 'place-type'); ?>
    <?php the_post_thumbnail_url(); ?>
    <?php the_excerpt(); ?>
    <?php the_permalink(); ?>

</article>