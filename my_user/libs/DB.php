<?php

class DB
{
    public $db_connection = 'mysql';
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $dbname = '';
    public $dsn = '';
    public $pdo = null;
    public $sth = null;
    public $table_name = '';
    public $sql = '';

    public function __construct($params = null)
    {
        $this->loadSetting($params);
    }

    private function loadSetting($params)
    {
        if (defined('DB_CONNECTION')) $this->host = DB_CONNECTION;
        if (defined('DB_HOST')) $this->host = DB_HOST;
        if (defined('DB_USER')) $this->user = DB_USER;
        if (defined('DB_PASSWORD')) $this->password = DB_PASSWORD;
        if (defined('DB_NAME')) $this->dbname = DB_NAME;

        if ($params['db_connection']) $this->db_connection = $params['db_connection'];
        if ($params['host']) $this->host = $params['host'];
        if ($params['user']) $this->host = $params['user'];
        if ($params['password']) $this->host = $params['password'];
        if ($params['dbname']) $this->dbname = $params['dbname'];
    }

    static public function connect()
    {
        $db = new DB();
        try {
            $db->dsn = "{$db->db_connection}:dbname={$db->dbname};host={$db->host}";
            $db->pdo = new PDO($db->dsn, $db->user, $db->password);
            $db->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function query($sql)
    {
        $this->sql = $sql;
        $this->sth = $this->pdo->query($this->sql);
        return $this;
    }

    //TODO
    public function fetchRow($sql = '')
    {
        if ($sql) $this->sql = $sql;
        $this->sth = $this->pdo->prepare($this->sql);
        $this->sth->execute();
        $row = $this->sth->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    public function tableName($table_name)
    {
        $this->table_name = $table_name;
        return $this;
    }

    public function insert($data)
    {
        try {
            $sql = $this->queryBuildInsert($data);
            $this->sth = $this->pdo->prepare($sql);
            $this->result = $this->sth->execute($data);
            return $this;
        } catch (PDOException $e) {
            echo 'SQL Insert error.';
            echo $e->getMessage();
            exit;
        }
    }

    public function queryBuildInsert($posts)
    {
        if (!$this->table_name) exit('Undefined table_name.');
        $keys = array_keys($posts);
        $columns = implode(', ', $keys);
        $values = ':' . implode(', :', $keys);
        $this->sql = "INSERT INTO {$this->table_name} ({$columns}) VALUES ({$values});";
        return $this->sql;
    }
}