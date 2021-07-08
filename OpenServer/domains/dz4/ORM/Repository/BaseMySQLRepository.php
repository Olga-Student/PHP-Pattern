<?php

namespace ORM\Repository;

use ORM\Db\MySQL;

abstract class BaseMySQLRepository
{
    /**
     * @var MySQL
     */
    private $MySQLConnection;

    public function __construct(MySQL $MySQLConnection)
    {
        $this->MySQLConnection = $MySQLConnection;
    }

    public function getMySQLConnection(): MySQL
    {
        return $this->MySQLConnection;
    }
}