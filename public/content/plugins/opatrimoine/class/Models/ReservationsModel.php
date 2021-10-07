<?php

namespace OPatrimoine\Models;

use WP_User;

class ReservationsModel extends CoreModel {
    
    protected $tableName = "reservations";

    public function _getTableName()
    {
        return $this->tableName;
    }

    public function createTable()
    {
        $sql = "
            CREATE TABLE " . $this->getTableName() . " (
                `id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `guided_tour_id` int unsigned NOT NULL,
                `member_id` int unsigned NOT NULL,
                `nb_of_reservations` int NOT NULL,
                `created_at` datetime NULL,
                `updated_at` datetime NULL
            );
        ";

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }

    public function insert($guidedTourId, $memberId, $nbPlaces)
    {
        $data = [
            'guided_tour_id' => $guidedTourId,
            'member_id' => $memberId,
            'nb_of_reservations' => $nbPlaces,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->database->insert(
            $this->getTableName(),
            $data
        );
    }

    public function deleteByTourIdAndMemberId($guidedTourId, $memberId)
    {
        $where = [
            'guided_tour_id' => $guidedTourId,
            'member_id' => $memberId,
        ];

        $this->database->delete(
            $this->getTableName(),
            $where
        );
    }

    public function getGuidedToursByMemberId($memberId)
    {
        $sql = "
            SELECT * FROM " . $this->getTableName() . "
            WHERE 
                member_id = %d
        ";

        if($memberId === 0) {
            return;
        }

        $results = $this->executeQuery(
            $sql,
            [
                $memberId,
            ],
        );
        // executeQuery return a array of objects representating each lines found :
        // 0 => {#1488 ▼
        //     +"id": "2"
        //     +"guided_tour_id": "967"
        //     +"member_id": "51"
        //     +"nb_of_reservations": "3"
        //     +"created_at": "2021-10-04 19:38:19"
        //     +"updated_at": null
        //   }
        
        $guidedToursIdList = [];
        $numbersOfReservationsByGuidedToursId = [];
        foreach($results as $reservationsResult) {
            $guidedTourId = $reservationsResult->guided_tour_id;

            $guidedToursIdList[] = $guidedTourId;

            $numbersOfReservationsByGuidedToursId[$guidedTourId] = $reservationsResult->nb_of_reservations;
        }
        
        $guidedTours = [];
        if(!empty($guidedToursIdList)) {
            $guidedTours = get_posts([
                'include' => $guidedToursIdList,
                'numberposts' => -1,
                'post_type' => 'guided-tour',
            ]);
        }

        foreach($guidedTours as $guidedTour) {
            // add acf fields to the guidedTour object
            $fields = get_fields($guidedTour->ID);
            foreach($fields as $key => $value) {
                // acf relational-field placeoftour is needed to load the entire post object of the place associated to display the place name
                $guidedTour->{$key} = $value;
            }

            // add the acf field city to the place post object
            $guidedTour->placeoftour->city = get_field('city', $guidedTour->placeoftour->ID);
            
            // add thematics array to the guidedTour object
            $thematics = get_the_terms
            ($guidedTour->ID, 'tour-thematic');
            $thematicsNames = [];
            foreach($thematics as $thematic) {
                $thematicsNames[] = $thematic->name;
            }
            $guidedTour->thematics = $thematicsNames;

            // add nb_of_reservations from this member to the guidedTour object
            $guidedTour->currentMemberReservations = $numbersOfReservationsByGuidedToursId[$guidedTour->ID];

            $user = wp_get_current_user();

            $guidedTour->canReserve = $this->canReserve($guidedTour->ID, $user);

            // add cancel reservation route to the guidedTour object
            global $router;
            $cancelReservationUrl = $router->generate(
                'user-reservations-delete-by-guided-tour-id-and-member-id',
                [
                    'guidedTourId' => $guidedTour->ID,
                    'memberId' => $user->ID,
                ],
            );
            $guidedTour->cancelReservationUrl = $cancelReservationUrl;
        }
        
        return $guidedTours;
    }

    public function getReservationByGuidedTourIdAndMemberId($guidedTourId, $memberId)
    {
        $sql = "
            SELECT * FROM " . $this->getTableName() . "
            WHERE 
                guided_tour_id = %d
                AND
                member_id = %d
        ";

        $results = $this->executeQuery(
            $sql,
            [
                $guidedTourId,
                $memberId,
            ],
        );

        $idList = [];
        foreach($results as $reservationsResult) {
            $idList[] = $reservationsResult->id;
        }

        if(!empty($idList)) {
            return $results[0];
        }
        else {
            return false;
        }
    }

    public function canReserve($guidedTourId, WP_User $user)
    {
        $roles = $user->roles;
        if(!in_array('member', $roles)) {
            $canReserve = false;
        } 
        else {
            $canReserve = false;
            // if member already reserved on this guided-tour, cannot make another reservation
            if($this->getReservationByGuidedTourIdAndMemberId($guidedTourId, $user->ID)) {
                $canReserve = false;
            }
            else {
                $canReserve = true;
            }
        }
        return $canReserve;
    }
}