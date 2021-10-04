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
}