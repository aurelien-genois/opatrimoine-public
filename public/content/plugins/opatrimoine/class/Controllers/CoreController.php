<?php

namespace OPatrimoine\Controllers;

class CoreController
{



    // IMPORTANT WP is_user_logged_in, Method to verificate if the user is connected, if he is not the user is redirected to a login page.
    protected function mustBeConnected()
    {
     
        if(!is_user_logged_in()) {
            wp_redirect(
                wp_login_url()
            );
            return false;
        }

        return true;
    }


  
    protected function isAdmin()
    {

        $user = wp_get_current_user();
        $roles = $user->roles;

       
        // Verification of the value "administrator" does it exist in the $rolerole table
        if(in_array('administrator', $roles)) {
            return true;
        }
        else {
            return false;
        }
    }


    // STEP MVC method to display a template of our theme
    /**
     * $template, name of the template to display
     * $viewVars, the variables that we will provide to the template
     */

    public function show($template, $viewVars = [])
    {
        // we get the $router variable (global variable), and we add it to the variables we send to the template
        global $router;
        $viewVars['router'] = $router;

        // STEP WP get_template_part, loading a template
        get_template_part(
            $template,  // identifier of the template to load
            null,   // name of the template
            $viewVars // variables to send to the template
        );
    }

}