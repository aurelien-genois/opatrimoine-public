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

    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script> 
    

    <?php wp_head();?>

    
</head>

<body>




<header>

  
        <a href="<?= home_url('/') ?>" class="logo"> <img class="opatrimoine-logo" src="/spe-wp/opatrimoine/public/content/themes/opatrimoine/assets/image/opatrimoinelogo.png" alt="O'Patrimoine logo">
             <h4>O'Patrimoine</h4> 
        </a>
     
            <div class="menu">
                <?php
                    wp_nav_menu([
                        'menu' => 'header_menu', 
                        'container' => 'nav', 
                        'echo' => true,  
                    ]);

                    
                ?>
               
            </div>

        <a class="button" href="<?= wp_login_url($registration_redirect); ?>">Connexion</a>
        
        <a class="button" href="<?= wp_registration_url(); ?>">S'inscrire</a>
        

</header>
