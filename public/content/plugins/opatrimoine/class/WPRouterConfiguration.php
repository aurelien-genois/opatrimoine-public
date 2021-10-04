<?php

namespace OPatrimoine;

class WPRouterConfiguration
{

    public function __construct()
    {
        // STEP ROUTER recording routes
        add_action(
            'init',
            [$this, 'registerRoutes']
        );
    }

    public function registerRoutes()
    {

        // STEP ROUTER declaration of a new custom route
        // all the routes having /user in the url will be managed in a custom way, in the custom-routes.php file

        add_rewrite_rule(
            // regexp validation of the url requested by the visitor
            'user',
            // "Virtual URL" understood by wordpress
            // so we define a variable "$ _GET" userRoute = true
            'index.php?myCustomGetVariable=true',

            // this rule allows us to prioritize our route
            'top'
        );

        // DEMO manage a route to display the phpinfo
        // add_rewrite_rule(
        //     'phpinfo',
        //     'index.php?phpinfo=true',
        //     'top'
        // );

        // BONUS generic rule for all routes of the opatrimoine plugin
        add_rewrite_rule(
            // opatrimoine/.+ means that in the url there must be opatrimoine /; followed by something
            'opatrimoine/.+',
            'index.php?opatrimoine=true',
            'top'
        );

        add_rewrite_rule(
            'test/.+',
            'index.php?test=true',
            'top'
        );


        // STEP ROUTER wp routing rule cache refresh
        // Wp records the roads in bdd, it is necessary to refresh the roadss
        flush_rewrite_rules();

        // STEP ROUTER we ask wordpress to monitor certain "variables" passed in the "virtual" url

        add_filter('query_vars', function($query_vars) {
            // STEP ROUTER Wordpress must monitor the "virtual" variable myCustomGetVariable
            $query_vars[] = 'myCustomGetVariable';
            // $query_vars[] = 'phpinfo';
            $query_vars[] = 'opatrimoine';
            $query_vars[] = 'test';
            return $query_vars;
        });


        // STEP ROUTER Verification whether a custom route has been detected
        // if we are on a customer route, we do not let wordpress choose it's template
        add_filter('template_include', function($template) {

            // retrieving the "virtual" variable myCustomGetVariable
            $myCustomGetVariable = get_query_var('myCustomGetVariable');
            
            // If we $myCustomGetVariable is true, this means that we are on a custom route
            if($myCustomGetVariable) {
               //  STEP ROUTER a custom route has been detected, we are taking the lead
               // we tell wordpress which file to load
               return __DIR__ .'/../custom-routes-execute.php';
            }

            // $phpinfo = get_query_var('phpinfo');
            // if($phpinfo) {
            //     return __DIR__ .'/../phpinfo.php';
            //  }

            $opatrimoine = get_query_var('opatrimoine');
            if($opatrimoine) {
                return __DIR__ .'/../custom-routes-execute.php';
            }

            $test = get_query_var('test');
            if($test) {
                return __DIR__ .'/../custom-routes-execute.php';
            }

            // otherwise we return the template that wordpress intended to use
            return $template;
        });
    }
}
