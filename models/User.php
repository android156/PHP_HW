<?php
namespace app\models;


use app\engine\Db;

class User extends Model
{
    public $id;
    public $login;
    public $pass;
    public function __construct(Db $db)

    {
        parent::__construct($db);
        echo " - Подкласс " . __CLASS__ . "<br>";
    }

    public function getTableName() {
        return 'users';
    }


}