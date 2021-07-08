<?php
namespace Factory;

use ORM\Contract\DbRecordInterface;
use ORM\Contract\DbQueryBuilderInterface;
use ORM\Contract\DbConnectionInterface;
use ORM\Contract\FactoryInterface;
use ORM\Db\Oracle;
use ORM\Repository\OracleDbConnectionRepository;
use ORM\Repository\OracleDbQueryBuilderRepository;
use ORM\Repository\OracleDbRecordRepository;

class OracleFactotyRepository implements FactoryInterface
{
    private Oracle $oracleConnection;

    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function creatDbConnection(): DbConnectionInterface
    {
        return new OracleDbConnectionRepository($this->oracleConnection);
    }

    public function creatDbQueryBuilder(): DbQueryBuilderInterface
    {
        return new OracleDbQueryBuilderRepository($this->oracleConnection);
    }

    public function creatDbRecord(): DbRecordInterface
    {
        return new OracleDbRecordRepository($this->oracleConnection);
    }
}
