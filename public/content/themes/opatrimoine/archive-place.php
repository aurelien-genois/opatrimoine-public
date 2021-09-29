<?php
get_header();

$placeTypes = getPlaceTypes();
$cities = getCities();

?>
<main>

    <h1>Liste des lieux</h1>

    <form class="places-list-form">
        <div>
            <fieldset>
                <input type="text" id="place-name" name="place-name" value="<?= $_GET['place-name'] ?? '' ?>">

                <select name="place-type" id="place-type">
                    <option value="">All</option>

                    <?php foreach($placeTypes as $placeType) :?>
                    <option value="<?= $placeType->slug ?>" <?= (isset($_GET['place-type']) && $_GET['place-type'] == $placeType->slug) ? 'selected' : '' ?>>
                        <?= $placeType->name ?>
                    </option>
                    <?php endforeach; ?>
                </select>

                <select name="place-city" id="place-city">
                    <option value="">All</option>

                    <?php foreach($cities as $city) :?>
                    <option value="<?= $city ?>"  <?= (isset($_GET['place-city']) && $_GET['place-city'] == $city) ? 'selected' : '' ?>><?= $city ?></option>
                    <?php endforeach ?>
                </select>

            </fieldset>
            <!-- NTH add input for guided-tours thematics -->
        </div>
        <button type="submit">Filtrer</button>
    </form>

    <!-- places-list -->
    <section>
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