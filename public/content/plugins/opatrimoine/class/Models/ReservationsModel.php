<?php

namespace OPatrimoine\Models;

use DateTime;
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


}