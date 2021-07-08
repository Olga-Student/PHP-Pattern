<?php


namespace ORM\Contract;


interface DbQueryBuilderInterface
{
    public function getOne();

    public function getAll();
}