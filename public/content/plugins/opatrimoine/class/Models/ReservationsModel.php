<?php

namespace OPatrimoine\Models;


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
        foreach($results as $reservationsResult) {
            $guidedToursIdList[] = $reservationsResult->guided_tour_id;
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
            $fields = get_fields($guidedTour->ID);
            foreach($fields as $key => $value) {
                // acf relational-field placeoftour is needed to load the entire post object of the place associated to display the place name
                $guidedTour->{$key} = $value;
            }

            // add the acf field city to the place post object
            $guidedTour->placeoftour->city = get_field('city', $guidedTour->placeoftour->ID);
            
            $thematics = get_the_terms
            ($guidedTour->ID, 'tour-thematic');
            $thematicsNames = [];
            foreach($thematics as $thematic) {
                $thematicsNames[] = $thematic->name;
            }
            $guidedTour->thematics = $thematicsNames;
        }

        // todo add nb_of_reservation for this member
        
        return $guidedTours;
    }
}