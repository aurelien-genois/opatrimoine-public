<?php
extract($args);
$dataVue = [
    'guidedTours' => $guidedTours,
    'user' => $user,
    'loginUrl' => wp_login_url(),
    'isDashboard' => true,
];


get_header();
?>

<main class="page-content">
    <div id="user">
    <h2 class="user-name"><?= $user->display_name ?></h2>
    <a href="<?= get_home_url() . "/?logout=true"?>">Se déconnecter</a>
    <!-- NTH link to updtate user informations -->
    </div>
    <section class="place-tours">
        <h2>Mes réservations</h2>
        <div id="tours-calendar" data-vue="<?= htmlspecialchars(json_encode($dataVue), ENT_QUOTES, 'UTF-8') ?>"></div>
    </section>

</main>


<?php
get_footer();
?>