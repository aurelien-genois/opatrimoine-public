<?php

namespace OPatrimoine\Models;

abstract class CoreModel {
    protected $database;
    protected $tableName;
    
    abstract public function _getTableName();

    public function __construct()
    {
        global $wpdb;
        $this->database = $wpdb;
    }

    public function getTableName()
    {
        return $this->database->prefix . $this->_getTableName();
    }

    public function executeQuery($sql, $parameters = [])
    {
        if(empty($parameters)) {
            return $this->database->get_results($sql);
        }
        else {
            $preparedStatement = $this->database->prepare(
                $sql,
                $parameters,
            );
            return $this->database->get_results($preparedStatement);
        }
    }
}