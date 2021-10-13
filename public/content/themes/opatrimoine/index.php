<?php
if(isset($_GET['logout'])) {
    wp_logout();
    $logoutMsg = "Vous êtes bien déconnecté";
}

get_header();
?>


<?php if(isset($logoutMsg)): ?>
    <p><?= $logoutMsg ?></p>
<?php endif ?>

<?php
    get_template_part('partials/carousel');
?>
<main class="container">


    <section id='presentation'> 

        <h2 class="title-opatrimoine-concept">O’Patrimoine, le concept</h2>
            <p> 
            O’Patrimoine a pour objectif de centraliser les visites guidées sur une seule plateforme et 
            de faciliter l’accès, hors Journées du Patrimoine,  à des lieux dont certaines parties sont parfois 
            inaccessibles au public.
            </p>
    
    </section>


    
    
    <div id="timeline"></div>
 






</main>

<?php
get_footer();
?>