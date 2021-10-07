<?php
extract($args);


get_header();
?>

<main class="page-content">
    <h1><?= $user->display_name ?></h1>
    <a href="<?= get_home_url() . "/?logout=true"?>">Se déconnecter</a>
    <!-- NTH link to updtate user informations -->



</main>


<?php
get_footer();
?>