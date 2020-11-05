<?php
class MySQLEntity
{
    public $db_name = 'my_shop';
    public $host = 'mysql';
    public $user = 'root';
    public $password = 'root';
    public $pdo;

    function getDSN()
    {
        $dsn = "mysql:dbname={$this->db_name};host={$this->host}";
        return $dsn;
    }

    function query($sql)
    {
        if (!$this->pdo) $this->connection();
        $result = $this->pdo->query($sql);
        return $result;
    }

    function connection()
    {
        try {
            $this->pdo = new PDO($this->getDSN(), $this->user, $this->password);
        } catch (PDOException $e) {
            print('Error:' . $e->getMessage());
            die();
        }
    }

    function close()
    {
        $this->pdo = null;
    }

    /**
     * SELECT
     * 
     * TODO: Model
     *
     * @param string $table_name
     * @param array $posts
     * @return array
     */
    function select($table_name, $options = null)
    {
        $sql = $this->selectSQL($table_name, $options = null);
        $results = $this->query($sql);
        return $results;
    }

    /**
     * Insert
     * 
     * TODO: Model
     *
     * @param string $table_name
     * @param array $posts
     * @return void
     */
    function insert($table_name, $posts)
    {
        $sql = $this->insertSQL($table_name, $posts);
        $this->query($sql);
    }

    /**
     * Insert SQL
     *
     * @param string $table_name
     * @param array $posts
     * @return string
     */
    function selectSQL($table_name, $options = null)
    {
        //TODO column
        $sql = "SELECT * FROM {$table_name}";
        if ($options['limit']) $sql.= " LIMIT {$options['limit']}";
        $sql.= ";";
        return $sql;
    }

    /**
     * Insert SQL
     *
     * @param string $table_name
     * @param array $posts
     * @return string
     */
    function insertSQL($table_name, $posts)
    {
        foreach ($posts as $key => $value) {
            $columns[] = $key;
            $values[] = "'{$value}'";
        }
        $column = implode(', ', $columns);
        $value = implode(', ', $values);
        $sql = "INSERT INTO {$table_name} ({$column}) VALUES ({$value});";
        return $sql;
    }

}