<?php

namespace ORM\Repository;

use ORM\Db\Oracle;

abstract class BaseOracleRepository
{
    /**
     * @var Oracle
     */
    private $OracleConnection;

    public function __construct(Oracle $OracleConnection)
    {
        $this->OracleConnection = $OracleConnection;
    }

    public function getOracleConnection(): Oracle
    {
        return $this->OracleConnection;
    }

}