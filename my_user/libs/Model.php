<?php
define('MODELS_DIR', APP_DIR.'models/');

class Model
{
    public $errors = [];
    public $value;

    public function query($sql)
    {
        $db = DB::connect();
        $db->query($sql);
    }

    public function find($id)
    {
        //TODO query builder
        $db = DB::connect();
        $sql = "SELECT * FROM {$this->table_name} WHERE id = {$id};";
        return $db->fetchRow($sql);
    }

    public function fetch($params)
    {
        //TODO query builder
        $db = DB::connect();
        $sql = "SELECT * FROM {$this->table_name}";
        if (isset($params['where'])) {
            $sql.= " WHERE {$params['where']}";
        }
        $sql.= ";";
        return $db->fetchRow($sql);
    }

    public function fetchRows($limit = 20)
    {
        //TODO $sql
        $db = DB::connect();
        $sql = "SELECT * FROM {$this->table_name} LIMIT {$limit};";
        return $db->fetchRows($sql);
    }

    public function insert($data)
    {
        $db = DB::connect();
        $db->tableName($this->table_name);
        $db->insert($data);
    }

}