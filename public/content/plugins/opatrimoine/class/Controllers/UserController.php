<?php

namespace OPatrimoine\Controllers;



class UserController extends CoreController
{
    public function index()
    {

        // IMPORTANT this method is only accessible for logged in users
        $this->mustBeConnected();


        // IMPORTANT WP wp_get_current_user Retrieving the logged in user (WP_User type object)
        $user = wp_get_current_user();


        // STEP MODEL use of a custom table in the controller


        // STEP MVC send variables to the view
        return $this->show('views/dashboard.view', [
            'user' => $user,
        ]);
    }



    // public function confirmDelete()
    // {
    //     $this->mustBeConnected();
        // before deleting the user, we make sure that the visitor is logged in
    //     if(!$this->mustBeConnected()) {
            // if the user is not logged in, we make a return to make sure that no further processing is performed
    //         return;
    //     }

        // We prohibit deleting an account if you are an administrator; this in order to prevent any mishandling
    //     if($this->isAdmin()) {
    //         echo 'Vous ne pouvez pas supprimer votre compte car vous êtes administrateur';
    //         exit();
    //     }

    //     return $this->show('views/user/confirm-delete.view');
    // }


    // public function delete()
    // {
    //     $this->mustBeConnected();

    //     if(!$this->mustBeConnected()) {
    //         return;
    //     }

    //     if($this->isAdmin()) {
    //         echo 'Vous ne pouvez pas supprimer votre compte car vous êtes administrateur';
    //         exit();
    //     }

        // user recovery
    //     $user = wp_get_current_user();
        // user deletion
    //     require_once ABSPATH . '/wp-admin/includes/user.php';

    //     wp_delete_user($user->ID);

        // redirect the user to the home page once their account is registered
    //     wp_redirect(
    //         get_home_url()
    //     );
    // }




    // BONUS ACF update user data
    public function update()
    {
        // SECURITY a check should be made on the "nonce" token (CSRF protection)
        $postId = filter_input(INPUT_POST, '_acf_post_id');

        foreach($_POST['acf'] as $fieldName => $newValue) {
            update_field($fieldName, $newValue, $postId);
        }
    }
}
