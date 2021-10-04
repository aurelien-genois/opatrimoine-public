<?php

namespace OPatrimoine\Controllers\Test;

use OPatrimoine\Controllers\CoreController;
use OPatrimoine\Models\ReservationsModel;

class ReservationsController extends CoreController {

    public function createTable()
    {
        echo "<h1>Test de création de la table opatrimoine_reservations</h1>";
        $model = new ReservationsModel();
        $model->createTable();
    }
}