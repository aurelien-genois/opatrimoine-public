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
}