<?php
require_once 'Entity.php';

class Item extends Entity
{
    public $columns = [
        'id' => ['type' => 'SERIAL'],
        'name' => ['type' => 'VARCHAR', 'length' => 256],
        'price' => ['type' => 'INT'],
        'created_at' => ['type' => 'TIMESTAMP'],
        'updated_at' => ['type' => 'TIMESTAMP'],
    ];

}