<?php

namespace OPatrimoine\Controllers;

use OPatrimoine\Models\ReservationsModel;
use WP_User;

class UserController extends CoreController
{
    public $reservationModel;

    public function __construct()
    {
        $this->reservationModel = new ReservationsModel();    
    }

    public function index()
    {

        // IMPORTANT this method is only accessible for logged in users
        $this->mustBeConnected();


        // IMPORTANT WP wp_get_current_user Retrieving the logged in user (WP_User type object)
        $user = wp_get_current_user();

        $registeredGuidedTours = $this->reservationModel->getGuidedToursByMemberId($user->ID);


        // STEP MODEL use of a custom table in the controller


        // STEP MVC send variables to the view
        return $this->show('views/dashboard.view', [
            'user' => $user,
            'guidedTours' => $registeredGuidedTours,
        ]);
    }

    public function registerReservationsToGuidedTour($guidedTourId, $memberId, $nbOfReservations)
    {
        $redirection = '';

        $this->mustBeConnected();

        if($memberId === null) {
            $user = wp_get_current_user();
        }
        else {
            $user = new WP_User(($memberId));
        }

        $guidedTour = get_post($guidedTourId);
        if($guidedTour && $guidedTour->post_type === "guided-tour") {
            $redirection = get_the_permalink($guidedTour->placeoftour);
            
            // acf function get_field() isn't necessary to get a custom field => WP automatically check for custom field
            $maxPersons = $guidedTour->totalpersons;
            $currentNbReservations = $guidedTour->totalreservations;
            $availableReservations = $maxPersons - $currentNbReservations;

            if(is_int(+$nbOfReservations) &&
            $nbOfReservations <= $availableReservations && 
            $nbOfReservations > 0) {
                
                if($this->reservationModel->canReserve($guidedTourId, $user)) {

                    // insert reservation in the custom-table
                    $this->reservationModel->insert($guidedTourId, $memberId, $nbOfReservations);

                    // increment totalreservations
                    $newNbReservations = $currentNbReservations + $nbOfReservations;
                    update_field('totalreservations', $newNbReservations, $guidedTourId);
                }
            }
        }
        dd(wp_redirect($redirection));
    }


    public function deleteByTourIdAndMemberId($guidedTourId, $memberId)
    {
        $redirection = '';

        $guidedTour = get_post($guidedTourId);
        if($guidedTour && $guidedTour->post_type === "guided-tour") {
            $redirection = get_the_permalink($guidedTour->placeoftour);

            // decrement guidedTour
            $currentReservation = $this->reservationModel->getReservationByGuidedTourIdAndMemberId($guidedTourId, $memberId);
            $newNbReservations = $guidedTour->totalreservations - $currentReservation->nb_of_reservations;
            update_field('totalreservations', $newNbReservations, $guidedTourId);

            // delete reservation
            $this->reservationModel->deleteByTourIdAndMemberId($guidedTourId, $memberId);
        }
        dd(wp_redirect($redirection));
    }

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
