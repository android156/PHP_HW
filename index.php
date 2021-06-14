<?php

class GoodsCategory {

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



$a = new GoodsCategory(1, 'Изопрофлекс', 'Трубы');

$a->view();

$b = new GoodsCategory(2, 'ТВЭЛ ПЭКС', 'Трубы');
$b->view();

echo $b->call_trash('дец');



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
// выводит 1234 т.к. static означает, что $x принадлежит всему классу, а не каждому объекту


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
// выводит 1122 т.к. static $x=0 означает, что это применится один при первом запуске функции, классов A и B - 2 штуки
// вызов функции от экземпляра изменит $x в соответствующем классе


class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }}
class B extends A
{
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();