<?php

namespace OPatrimoine\Controllers\Test;

use OPatrimoine\Controllers\CoreController;
use OPatrimoine\Models\ReservationsModel;

class ReservationsController extends CoreController {
    public $model;

    public function __construct()
    {
        $this->model = new ReservationsModel();    
    }

    public function createTable()
    {
        echo "<h1>Test de création de la table opatrimoine_reservations</h1>";
        $this->model->createTable();
    }
    
    public function insert()
    {
        echo "<h1>Test de insertion dans la table opatrimoine_reservations</h1>";
        $this->model->insert(967, 51, 3);
    }
    
    public function deleteByTourIdAndMemberId($guidedTourId, $memberId)
    {
        echo "<h1>Test de suppression dans la table opatrimoine_reservations via guided_tour_id et member_id</h1>";
        $this->model->deleteByTourIdAndMemberId($guidedTourId, $memberId);
    }
    
    public function getGuidedToursByMemberId($memberId)
    {
        echo "<h1>Test de sélection des visites dans la table opatrimoine_reservations via member_id</h1>";

        $results = $this->model->getGuidedToursByMemberId($memberId);
        dd($results);
    }
    
    public function getReservationByGuidedTourIdAndMemberId($guidedTourId, $memberId)
    {
        echo "<h1>Test de sélection de réservations dans la table opatrimoine_reservations via guided_tour_id et member_id</h1>";
        
        $results = $this->model->getReservationByGuidedTourIdAndMemberId($guidedTourId, $memberId);
        dd($results);
    }
}