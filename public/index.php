<?php

use app\models\Product;
use app\models\User;
use app\models\Cart;
use app\engine\Db;
use app\models\examples\Product as Prod;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());

$product->getOne(15);

$product->getAll();

$ex_product = new Prod(new Db());

$user = new User(new Db());

$user->getOne(2);

$user->getAll();

$cart = new Cart(new Db());

$cart->getAll();



























die();
/*
//CREATE
$product = new Product();
$product->name = 'Чай';
$product->price = 23;
$product->insert();

//READ
$product = new Product();
$product->getOne(5);
$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/