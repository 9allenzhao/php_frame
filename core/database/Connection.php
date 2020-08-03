<?php

namespace core\database;

use Closure;
use Illuminate\Database\ConnectionInterface;
use PDO;
use PDOStatement;

class Connection implements ConnectionInterface
{


    protected $table;

    public function table($table, $as = null)
    {
        $this->table = $table;
        return $this;
    }

    public function raw($value)
    {

    }

    public function select($query, $bindings = [], $useReadPdo = true)
    {
        // TODO: Implement select() method.
    }

    public function insert($query, $bindings = [])
    {
        // TODO: Implement insert() method.
    }

    public function update($query, $bindings = [])
    {
        // TODO: Implement update() method.
    }

    public function delete($query, $bindings = [])
    {
        // TODO: Implement delete() method.
    }

    public function statement($query, $bindings = [])
    {
        // TODO: Implement statement() method.
    }


    public function prepareBindings(array $bindings)
    {
        // TODO: Implement prepareBindings() method.
    }

    public function beginTransaction()
    {
        // TODO: Implement beginTransaction() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }

    public function rollBack()
    {
        // TODO: Implement rollBack() method.
    }

}