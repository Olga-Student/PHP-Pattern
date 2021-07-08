<?php

namespace Service;

use ORM\Contract\FactoryInterface;

class Service
{
    private $dbConnection;
    private $dbQuerubuilder;
    private $dbRecord;

    public function __construct(FactoryInterface $repositoryFactory)
    {
        $this->dbConnection = $repositoryFactory->creatDbConnection();
        $this->dbQuerubuilder = $repositoryFactory->creatDbQueryBuilder();
        $this->dbRecord = $repositoryFactory->creatDbRecord();
    }

}

