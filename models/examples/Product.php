<?php


namespace app\models\examples;


use app\engine\Db;
use app\models\Model;

class Product extends Model
{
    public function __construct(Db $db)
    {
        parent::__construct($db);
        echo " - Подкласс " . __CLASS__ . "<br>";
    }

    function getTableName()
    {
        // TODO: Implement getTableName() method.
    }
}