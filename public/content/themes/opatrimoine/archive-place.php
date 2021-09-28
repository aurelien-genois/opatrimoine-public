<?php
get_header();

$places = new WP_Query([
    'post_type' => 'place',
]);

?>

<h1>Liste des lieux</h1>

<?php
if($places->have_posts()) {
    while ($places->have_posts()) {
        $places->the_post();
        get_template_part('partials/place-thumbnail');
    }
}
?>

<?php
get_footer();
?>