<?php

namespace app\models;

use app\engine\Db;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct(Db $db)
    {
        parent::__construct($db);
        echo " - Подкласс " . __CLASS__ . "<br>";
    }

    protected function getTableName()
    {
        return 'goods';
    }


}

