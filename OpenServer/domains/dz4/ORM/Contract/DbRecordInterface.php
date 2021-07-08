<?php


namespace ORM\Contract;


interface DbRecordInterface
{
    public function add();

    public function delete();

    public function update();

}