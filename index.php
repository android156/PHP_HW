<?php

class GoodsGroup {

    const PI = 3.14;
    public $id;
    public $name;
    public $type;
// Конструктор класса
    function __construct($id, $name, $type){
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        echo "Создан экземпляр класса " . self::class;
    }
//    метод покажись кто ты
    function view(){
        echo "<h1>$this->name</h1><p>$this->type</p>";
    }
//    полный №%"%%"%?*
    function call_trash($message) {
        return self::PI . $message;
    }

}

class GoodsCategory extends GoodsGroup {

    public $temperature;
    public $pressure;

    public function __construct($id = 0, $name = '', $type = '', $temperature = 0, $pressure = 0)
    {
        parent::__construct($id, $name, $type, $temperature, $pressure);
        $this->temperature = $temperature;
        $this->pressure = $pressure;
    }

    public function view()
    {
        parent::view();
        echo " Это подкласс класса " . __CLASS__ . "<br>";

    }


}




$a = new GoodsGroup(1, 'Изопрофлекс', 'Трубы');

$a->view();

$b = new GoodsGroup(2, 'ТВЭЛ ПЭКС', 'Трубы');
$b->view();

$c = new GoodsCategory('101', 'Изопрофлекс 95', 'Трубы', 95, 6);
$c->view();

echo $b->call_trash(' - это наша константа ПИ');



//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A();
//$a2 = new A();
//$a1->foo();
//$a2->foo();
//$a1->foo();
//$a2->foo();
// выводит 1234 т.к. static $x=0 означает, $x принадлежит всему классу и что =0 применится один раз при первом
// запуске функции. Дальше при каждом вызове от любого экземпляра этого класса будет работать инкремент


//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A();
//$b1 = new B();
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
// выводит 1122, т.к. static $x=0 означает, $x принадлежит всему классу и что =0 применится один раз при первом запуске
// функции , классов A и B - 2 штуки, вызов функции от экземпляра изменит $x в соответствующем классе


class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }}
class B extends A
{
}
$a1 = new A;
var_dump($a1);
$b1 = new B;
var_dump($b1);
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

//Вижу, что нет скобок, результат не отличается от предыдущего. Объяснение то же, но про скобки не догоняю