<?php

namespace OPatrimoine;

use WP_User;

class Registration
{
    public function __construct()
    {
        // DOC SIGNUP hooks/filters ordre de déclenchement : https://usersinsights.com/wordpress-user-registration-hooks-visualized/

        // STEP SIGNUP chargement des assets de la page login
        add_action(
            'login_enqueue_scripts',
            [$this, 'loadAssets']
        );

        // STEP SIGNUP customisation du formulaire d'inscription

        add_action(
            'register_form',
            [$this, 'registerForm']
        );

        // STEP SIGNUP gestion des messages d'erreurs
        add_action(
            'registration_errors',
            [$this, 'checkErrors']
        );

        // STEP SIGNUP customisation de l'enregistrement en BDD
        add_action(
            'register_new_user',
            [$this, 'registerNewUser']
        );


        // STEP SIGNUP Redirection après inscription
        // TODO à la fin de l'inscription l'utilisateur est redirigé vers la home page du site. Il faudrait le rediriger vers une page "custom"
        add_filter('registration_redirect', function($registration_redirect) {
            // NTH use the rooter (doesn't succeed to make it work)
            $registration_redirect = home_url('/user/');
            return $registration_redirect;
        });
    }


    public function loadAssets()
    {
        wp_enqueue_style(
            'login-form',
            get_theme_file_uri('assets/css/login-form.css')
        );
    }

    public function registerForm()
    {
        // BONUS la fonction __(.....) permet de se branche sur le système d'internationnalisation de wordpress
        // InternationnalizatioN == I18N
        // DOC WP I18N https://make.wordpress.org/polyglots/handbook/plugin-theme-authors-guide/gettext/
        $passwordHTML = '
            <p>
                <label for="user_password">' . __('Mot de passe') . '</label>
                <input type="password" name="user_password" id="user_password" class="input" value="" size="20" autocapitalize="off">
            </p>
        ';
        echo $passwordHTML;


        $confirmPasswordHTML = '
            <p>
                <label for="user_confirm_password">' . __('Confirmer le mot de passe') . '</label>
                <input type="password" name="user_confirm_password" id="user_confirm_password" class="input" value="" size="20" autocapitalize="off">
            </p>
        ';
        echo $confirmPasswordHTML;


        $chooseTypeHTML = '
            <p>
                <label for="user_type">' . __('Vous ête un(e)') . '</label>
                <select name="user_type" id="user_type" class="input">
                    <option value="customer"> Client(e)</option>
                    <option value="member"> membre</option>
                </select>
            </p>
        ';
        echo $chooseTypeHTML;
    }

    // STEP SIGNUP check errors
    // nous allons ajouter nos contrôles de donnée custom. Les erreurs sont stockées dans la variable $errors. Cette variable est gérée automatiqument par wordpress
    public function checkErrors($errors)
    {

        // récupération du mot de passe envoyé en  POST
        // $password =  $_POST['user_password'];
        // DOC PHP filter_input https://www.php.net/filter_input
        $password = filter_input(INPUT_POST, 'user_password');
        $passwordConfirmation = filter_input(INPUT_POST, 'user_confirm_password');

        if(empty($password)) {
            $errors->add(
                'password-empty',
                '<strong>' . __('Error: ') . '</strong> Votre mot de passe est vide'
            );
        }

        /*
        // le mot de passe doit contenir un chiffre
        // plus  court : if(!preg_match('/\d/', $password))
        if(!preg_match('/[0-9]/', $password)) {
            $errors->add(
                'password-no-number',
                '<strong>' . __('Error: ') . '</strong> Votre mot de passe doit contenir un chiffre'
            );
        }

        // le mot de passe doit contenir une majuscule
        if(!preg_match('/[A-Z]/', $password)) {
            $errors->add(
                'password-no-upper-letter',
                '<strong>' . __('Error: ') . '</strong> Votre mot de passe doit contenir une majuscule'
            );
        }

        // le mot de passe doit contenir un caractère spécial
        if(!preg_match('/\W/', $password)) {
            $errors->add(
                'password-no-special-caracter',
                '<strong>' . __('Error: ') . '</strong> Votre mot de passe doit contenir un caractère spécial'
            );
        }


        // NOTICE PHP mb_strlen ; bien penser à utiliser les fonctions "multibytes" lorsque l'on travaille sur des chaines de caractères
        if(mb_strlen($password) < 6) {
            $errors->add(
                'password-too-short',
                '<strong>' . __('Error: ') . '</strong> Votre mot de passe doit faire six caractères au minimum'
            );
        }
        */


        if($password !== $passwordConfirmation) {
            // si le mot de passe choisi par l'utilisateur n'est pas identique à la confirmation du mot de passe, nous ajoutons un message d'erreur

            // DOC SIGNUP add error https://developer.wordpress.org/reference/classes/wp_error/add/
            // DOC WP WP_Error https://developer.wordpress.org/reference/classes/wp_error/#methods
            $errors->add(
                'passwords-different',  // identifiant du message d'erreur
                '<strong>' . __('Error: ') . '</strong> Vos mots de passes sont différents'    // message d'erreur à aficher
            );
        }

        // STEP SIGNUP Contrôle du rôle choisi par l'utilisateur.
        // WARNING, il faut toujours contrôler les données venant de l'utilisateur avant de les insérer en BDD
        $role = filter_input(INPUT_POST, 'user_type');

        // Si $role est différent de "customer" ET également différent de member ; le role est invalide
        if($role !== 'customer' && $role !== 'member') {
            $errors->add(
                'role-invalid',
                '<strong>' . __('Error: ') . '</strong> Rôle invalide ; tentative de piratage !'
            );
        }
        return $errors;
    }


    // STEP SIGNUP post traitement après insertion de l'utilisateur en BDD
    // Wordpress nous fournit l'id de l'utilisateur qui vient d'être créé
    public function registerNewUser($userId)
    {
        // récupération de l'utilisateur qui vient d'être créé

        // DOC WP_User https://developer.wordpress.org/reference/classes/wp_user/
        $user = new WP_User($userId);


        $role = filter_input(INPUT_POST, 'user_type');

        if ($role == 'customer' || $role == 'member') {
            // par défaut dans wordpress un utilisateur est créé avec le rôle subscriber (ceci est configurable dans le backoffice)
            $user->remove_role('subscriber');
            $user->add_role($role);
        }




        // STEP SIGNUP enregistrement du mot de passe
        // Wordpress chiffre le mot de passe automatiquement
        $password = filter_input(INPUT_POST, 'user_password');
        wp_set_password($password, $userId);

        // auto-log the user after registration
        wp_signon( [
            'user_login' => $user->display_name,
            'user_password' => $password,
            'remember' => false,
        ], false );
    }
}
