<?php
get_header();

$guidedTours = getGuidedToursByPlaceId(get_the_ID());
?>

<h3><?= wp_get_current_user()->display_name ?></h3>

            <div class="buttons">
                <a class="button" href="">Réactualiser mes informations</a>
            
                <a class="button" href="<?= get_home_url() . "/?logout=true"?>">Déconnexion</a>
                    
            </div>

<main class="dashboard-content">

<section class="place-tours">
        <h2>Mes réservations</h2>
        <!-- TODO create the vuetify component -->
        <div id="tours-calendar" data-vue="<?= htmlspecialchars(json_encode($guidedTours), ENT_QUOTES, 'UTF-8') ?>"></div>
    </section>

    <!-- places-list -->
    <section class="post-listing">
    <?php
    if(have_posts()) {
        while (have_posts()) {
            the_post();

            get_template_part('partials/place-thumbnail');
        }
    }
    ?>
    </section>

</main>

<?php
get_footer();
?>