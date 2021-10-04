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

}