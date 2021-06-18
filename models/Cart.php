<?php


namespace app\models;


use app\engine\Db;

class Cart extends Model
{
    public $id;
    public $total_cost;
    public $user_id;

    public function __construct(Db $db)
    {
        parent::__construct($db);
        echo " - Подкласс " . __CLASS__ . "<br>";
    }

    protected function getTableName()
    {
        return 'cart';
    }
}