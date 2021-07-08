<?php
declare(strict_types=1);

namespace ORM;

use Factory\MySQLFactoryRepository;
use Factory\OracleFactotyRepository;
use ORM\Db\MySQL;
use ORM\Db\Oracle;
use ORM\Service;

$MySQLFactoryRepository = new MySQLFactoryRepository(new MySQL());
$MySQLService = new Service($MySQLFactoryRepository);


$oracleFactoryRepository = new OracleFactotyRepository(new Oracle());
$OracleService = new Service($oracleFactoryRepository);