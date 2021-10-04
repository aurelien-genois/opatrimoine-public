<?php

global $router;

// STEP ROUTER, altorouter launch

$match = $router->match();

// If the router has validated a route
if($match) {
    $callbackFunction = $match['target'];

    // We execute the callback function by passing it as argument the list of the "variable" parts of the URL
    call_user_func_array(
        $callbackFunction,
        $match['params']
    );
}
else {
    // TODO Manage page 404
    exit('PAGE NON TROUVEE');
}
