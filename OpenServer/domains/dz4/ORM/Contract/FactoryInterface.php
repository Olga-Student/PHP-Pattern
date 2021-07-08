<?php

namespace ORM\Contract;

interface FactoryInterface
{
  public function creatDbConnection(): DbConnectionInterface;

  public function creatDbQueryBuilder(): DbQueryBuilderInterface;

  public function creatDbRecord(): DbRecordInterface;
}