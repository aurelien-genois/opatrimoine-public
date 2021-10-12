<?php
    global $router;
    $registration_redirect = $router->generate(
        'user-index'
    );
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Be+Vietnam+Pro:wght@200;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= get_home_url() ?>/content/themes/opatrimoine/assets/image/opatrimoineicon.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script> 
    

    <?php wp_head();?>

    
</head>

<body>




<header id="header">

    <nav class="navbar">
        
        <div class="logo">
            <a href="<?= home_url('/') ?>" class="logo"> <img class="opatrimoine-logo" src="<?= get_home_url() ?>/content/themes/opatrimoine/assets/image/opatrimoinelogo.png" alt="O'Patrimoine logo">
                <h4>O'Patrimoine</h4> 
            </a>
        </div>


        <div class="nav-list">
            <div class="menu">
                <?php
                    wp_nav_menu([
                        'menu' => 'header_menu', 
                        'container' => 'nav',
                        'menu_class' => 'nav-menu',
                        'echo' => true,  
                    ]);
                ?>
                <div class="buttons">            
                    <?php if (is_user_logged_in() && current_user_can('member')): ?>
                        <p>Bonjour <?= wp_get_current_user()->display_name ?></p>
                        <a href="<?= $registration_redirect ?>">Mon dashboard</a>
                    <?php elseif (is_user_logged_in() && current_user_can('customer')): ?>
                        <p>Bonjour <?= wp_get_current_user()->display_name ?></p>
                    <?php else: ?>
                        <a class="button" href="<?= wp_login_url(); ?>">Connexion</a>
                        
                        <a class="button" href="<?= wp_registration_url(); ?>">S'inscrire</a>
                    <?php endif ?>
                </div>
            </div>
        </div>

        <div class="burger-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>   
        </div>
    </nav>

</header>
