
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/spe-wp/opatrimoine/public/content/themes/opatrimoine/style.css" rel="stylesheet">
    <!-- TODO add fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    

    <?php wp_head();?>

    
</head>

<body>

<header>
  
        <a href="#" class="logo"> <img class="opatrimoine-logo" src="/spe-wp/opatrimoine/public/content/themes/opatrimoine/assets/image/opatrimoinelogo.png" alt="O'Patrimoine logo">
             <h4>O'Patrimoine</h4> 
        </a>
     
            <div class="menu">
                <?php
                // nous allons afficher le menu "nav". Ce menu a été défini dans le backoffice de wp Apparence -> Personnaliser -> Menu
                // IMPORTANT WP afficher un menu wordpress
                // DOC https://developer.wordpress.org/reference/functions/wp_nav_menu/
                    wp_nav_menu([
                        'theme_location' => 'header_menu', // première clé : quel menu nous souhaitons afficher
                        'container' => 'nav',    // la balise HTML qui sera utilisée pour encapsuler le menu
                    
                        'echo' => true,    // permet d'afficher le menu
                    ]);

                    
                ?>
            </div>

        <button id="connection">Connexion</button>
    
</header>
