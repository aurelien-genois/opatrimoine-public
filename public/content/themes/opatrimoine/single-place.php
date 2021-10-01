<?php
get_header();
the_post();

$guidedTours = getGuidedToursByPlaceId(get_the_ID());
?>


<main class="page-content single-place">
    <figure class="place-image"><?php the_post_thumbnail() ?></figure>
    <div class="place-head">
        <h1><?= get_the_title(); ?></h1>
        <!-- NTH notation with number of votes -->
        <!-- NTH number of comments -->
    </div>
    <div class="place-type"><?php the_terms(get_the_ID(), 'place-type'); ?></div>

    <section class="place-description">
        <h2>Description</h2>
        <p ><?= get_the_content(); ?></p>
    </section>

    <section class="place-contact">
        <h2>Contact</h2>
        <p class="place-tel"><?php the_field('telephone') ?></p>
        <p class="place-address"><?php the_field('address') ?></p>
        <p class="place-urlsite">
            <a href="<?php the_field('urlsite') ?>" target="_blank">Voir le site internet</a>
        </p>
    </section>

    <section class="place-tours">
        <h2>Visites</h2>
        <!-- TODO create the vuetify component -->
        <div id="tours-calendar" data-vue="<?= json_encode($guidedTours); ?>"></div>
    </section>

    <!-- NTH add comments form -->

</main>

<?php
get_footer();
?>
