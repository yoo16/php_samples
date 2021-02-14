<?php
define('MODELS_DIR', APP_DIR.'models/');

class Model
{
    public $errors = [];

    public function query($sql)
    {
        $db = DB::connect();
        $db->query($sql);
    }

    public function fetch($sql = '')
    {
        //TODO $sql
        $db = DB::connect();
        return $db->fetchRow($sql);
    }

    public function insert($data)
    {
        $db = DB::connect();
        $db->tableName($this->table_name);
        $db->insert($data);
    }

}