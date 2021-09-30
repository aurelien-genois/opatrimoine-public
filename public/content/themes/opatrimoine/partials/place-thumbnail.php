<?php

?>

<article class="place-thumbnail">
    <figure>
        <?php the_post_thumbnail('medium'); ?>
    </figure>
    <div class="place-infos">
        <div class="place-main-info">
            <h3>
                <?= get_the_title() ?>
            </h3>
            <?php the_terms(get_the_ID(), 'place-type'); ?>
        </div>
        
        <p class="place-excerpt">
            <?= get_the_excerpt(); ?>
        </p>
        <a class="links" href="<?php the_permalink(); ?>">
            Voir le lieu
        </a>
        
        <!-- <strong>?= get_field('city', the_ID()) ?> </strong> -->
    </div>
</article>