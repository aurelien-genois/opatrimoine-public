<?php
get_header();

$placeTypes = getPlaceTypes();
$departments = getDepartments();

?>
<main class="page-content">

    <h2 class="place-list">Liste des lieux</h2>

    <form class="places-list-form">
        <div class="inputs-container">
            <fieldset>
                <input type="text" id="place-name" name="place-name" value="<?= $_GET['place-name'] ?? '' ?>">

                <select name="place-type" id="place-type">
                    <option value="">Tous les types de lieux</option>

                    <?php foreach($placeTypes as $placeType) :?>
                    <option value="<?= $placeType->slug ?>" <?= (isset($_GET['place-type']) && $_GET['place-type'] == $placeType->slug) ? 'selected' : '' ?>>
                        <?= $placeType->name ?>
                    </option>
                    <?php endforeach; ?>
                </select>

                <select name="place-department" id="place-department">
                    <option value="">Tous les départements</option>

                    <?php foreach($departments as $department) :?>
                    <option value="<?= $department ?>"  <?= (isset($_GET['place-department']) && $_GET['place-department'] == $department) ? 'selected' : '' ?>><?= $department ?></option>
                    <?php endforeach ?>
                </select>

            </fieldset>
            <!-- NTH add input for guided-tours thematics -->
        </div>
        <button type="submit" class="button">Filtrer</button>
    </form>

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