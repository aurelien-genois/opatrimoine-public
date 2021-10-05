<?php

use OPatrimoine\Controllers\Test\ReservationsController;
use OPatrimoine\Controllers\UserController;

global $router;

$router = new AltoRouter();


// Altorouter needs to know the root of the website

// We are not going to use dirname because if we run our plugin in a windows environment, dirname may "crash" due to the folder separators (windows: c: \ zrgfz \ ....)
// $basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
$router->setBasePath($basePath);

// ===============================
// Below, the route configuration
// ===============================

// STEP ROUTER configuration routes
$router->map(

    'GET', // we monitor HTTP GET calls

    '/user/', // url to watch
    function() {
        // callback function when the route is validated
        $controller = new UserController();
        echo $controller->index();
    },
    'user-index' // name of the route
);

// BONUS ACF save form
$router->map(
    'POST',
    '/user/',
    function() {
        $controller = new UserController();
        echo $controller->update();
    },
    'user-update'
);


// $router->map(
//     'GET',
//     '/user/confirm-delete/',
//     function() {
//        $controller = new UserController();
//        $controller->confirmDelete();
//     },
//     'user-confirm-delete'
// );


// $router->map(
//     'GET',
//     '/user/delete/',
//     function() {
//        $controller = new UserController();
//        $controller->delete();
//     },
//     'user-delete'
// );


// =======================================================================
// We configure our custom routes at the same time as we initialize the plugin. So whatever the requested page (custom or wp hierarchy), the router is available

$router->map(
    'GET',
    '/user/register-reservations-to-guided-tour/[i:guidedTourId]/[i:memberId]/[i:nbOfReservations]/',
    function($guidedTourId, $memberId, $nbOfReservations) {
       $controller = new UserController();
       $controller->registerReservationsToGuidedTour($guidedTourId, $memberId, $nbOfReservations);
    },
    'user-register-reservations-to-guided-tour'
);
//=======================================================================



// STEP MODELS Model layer test routes

$router->map(
    'GET',
    '/test/reservations/create-table/',
    function() {
       $controller = new ReservationsController();
       $controller->createTable();
    },
    'test-reservations-create-table'
);

$router->map(
    'GET',
    '/test/reservations/insert/',
    function() {
       $controller = new ReservationsController();
       $controller->insert();
    },
    'test-reservations-insert'
);


// BONUS ALTOROUTER route with variable part
// $router->map(
//     'GET',
//     '/test/project-developer/delete-by-id/[i:id]/',
//     function($id = 1) {
//        $controller = new ProjectDeveloperController();
//        $controller->deleteById($id);
//     },
//     'test-project-developer-delete-by-id'
// );


$router->map(
    'GET',
    '/test/reservations/delete-by-guided-tour-id-and-member-id/[i:guidedTourId]/[i:memberId]/',
    function($guidedTourId, $memberId) {
       $controller = new ReservationsController();
       $controller->deleteByTourIdAndMemberId($guidedTourId,$memberId);
    },
    'test-reservations-delete-by-guided-tour-id-and-member-id'
);

// $router->map(
//     'GET',
//     '/test/project-developer/update-date-by-id/[i:id]/',
//     function($id) {
//        $controller = new ProjectDeveloperController();
//        $controller->updateDateById($id);
//     },
//     'test-project-developer-update-date-by-id'
// );


// $router->map(
//     'GET',
//     '/test/project-developer/find-all/',
//     function() {
//        $controller = new ProjectDeveloperController();
//        $controller->findAll();
//     },
//     'test-project-developer-find-all'
// );

$router->map(
    'GET',
    '/test/reservations/get-guided-tours-by-member-id/[i:memberId]/',
    function($memberId) {
       $controller = new ReservationsController();
       $controller->getGuidedToursByMemberId($memberId);
    },
    'test-reservations-get-guided-tours-by-member-id'
);

$router->map(
    'GET',
    '/test/reservations/get-reservation-by-guided-tour-id-and-member-id/[i:guidedTourId]/[i:memberId]/',
    function($guidedTourId, $memberId) {
       $controller = new ReservationsController();
       $controller->getReservationByGuidedTourIdAndMemberId($guidedTourId, $memberId);
    },
    'test-reservations-get-reservation-by-guided-tour-id-and-member-id'
);


