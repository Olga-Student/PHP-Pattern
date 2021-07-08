<?php
namespace Factory;

use ORM\Contract\DbRecordInterface;
use ORM\Contract\DbQueryBuilderInterface;
use ORM\Contract\DbConnectionInterface;
use ORM\Contract\FactoryInterface;
use ORM\Db\MySQL;
use ORM\Repository\MySQLDbConnectionRepositiry;
use ORM\Repository\MySQLDbQueryBuilderRepository;
use ORM\Repository\MySQLDbRecordRepository;

class MySQLFactoryRepository implements FactoryInterface
{
    private MySQL $MySQLConnection;

    public function __construct(MySQL $MySQLConnection)
    {
        $this->MySQLConnection = $MySQLConnection;
    }

    public function creatDbConnection(): DbConnectionInterface
    {
       return new MySQLDbConnectionRepositiry($this->MySQLConnection);
    }

    public function creatDbQueryBuilder(): DbQueryBuilderInterface
    {
        return new MySQLDbQueryBuilderRepository($this->MySQLConnection);
    }

    public function creatDbRecord(): DbRecordInterface
    {
        return new MySQLDbRecordRepository($this->MySQLConnection);
    }
}