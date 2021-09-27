<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    <!-- TODO add fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

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

        <button id="connection">Connexion</button>
    
</header>
