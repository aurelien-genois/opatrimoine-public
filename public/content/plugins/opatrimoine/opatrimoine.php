<?php
/**
 * Plugin Name: O'Patrimoine
 * Author: Promo Ulysse WP
 * Description: Ce plugin crée les fonctionnalités nécessaires au bon fonctionnement du site O'Patrimoine
 */

 use OPatrimoine\Plugin;

 require __DIR__ . '/vendor-opatrimoine/autoload.php';
 require __DIR__ . '/custom-routes-configuration.php';

 $plugin = new Plugin();

 register_activation_hook(
     __FILE__,
     [$plugin, 'activate'],
 );

 register_deactivation_hook(
     __FILE__,
     [$plugin, 'deactivate'],
 );
