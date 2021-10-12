<?php

function insertPresentationPage () {
    $presentationPageContent = <<<PRESENTATION
        <p>Créée en 2021 à Paris, l’association O’Patrimoine souhaite promouvoir toute l’année l’histoire du patrimoine en organisant des visites guidées sur des lieux remarquables pour leurs vestiges du passé.<p/>
        <p>O’Patrimoine a pour objectif de centraliser les visites guidées sur une seule plateforme et de faciliter l’accès, hors Journées du Patrimoine,  à des lieux dont certaines parties sont parfois inaccessibles au public. <p/>
        <p>L’association naissante compte aujourd’hui une trentaine de guides et organisateurs bénévoles sur Paris et espère, grâce à sa présence numérique, se développer dans d’autres villes.</p>
    PRESENTATION;

    $presentationExist = get_page_by_path("presentation-de-opatrimoine", OBJECT, "page");
    // $presentationExist = get_posts([
        // => same but use WP_Query & return an array
    //     "post_type" => "page",
    //     "name" => "presentation-de-opatrimoine",
    // ]); presentationExist[0] is the page obj if exist
    if(empty($presentationExist)) {
        $pageID = wp_insert_post([
            'post_title' => "Présentation de O'Patrimoine",
            'post_content' => $presentationPageContent,
            'post_status' => "publish",
            'post_type' => "page",
            'comment_status' => "closed",
        ]);
    } else {
        $pageID = $presentationExist->ID;
    }


    return $pageID;
}

function insertPracticalInfoPage() {
    $praticalInfoContent = <<<PRATICALINFO
        <p>Toutes les visites guidées sont pour proposées gratuitement par des personnes bénévoles, mais il est possible à l’avenir que certaines visites soient payantes en fonction de l’évolution du projet et des partenariats.</p>
        <p>Pour le moment, les visites guidées se limitent à quelques musées et bâtiments de la ville de Paris mais les lieux proposés s’élargiront au fil des partenariats et de l’augmentation des bénévoles.<p/>
    PRATICALINFO;

    $praticalInfoExist = get_page_by_path("informations-pratiques", OBJECT, "page");
    if(empty($praticalInfoExist)) {
        $pageID = wp_insert_post([
            'post_title' => "Informations pratiques",
            'post_content' => $praticalInfoContent,
            'post_status' => "publish",
            'post_type' => "page",
            'comment_status' => "closed",
        ]);
    } else {
        $pageID = $praticalInfoExist->ID;
    }


    return $pageID;
}

