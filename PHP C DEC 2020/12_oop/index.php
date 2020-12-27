<?php
//
//// What is class and instance...template..new data type..varibles(instances)
//class Person {
//    public $name;
//    public $surname;
//    private $age;
//
//    public function __construct($name, $surname)
//    {
//echo $name. ''.$surname;
//$this->name = $name;
//$this->surname=$surname;
//    }
//
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}
//$p = new Person('george', 'karani');
//echo '<pre>';
//var_dump($p);
//echo '</pre>';
//
//
////$p2 = new Person();
////$p2->name = 'georges';
////$p2->surname = 'karanis';
//// Create Person class in Person.php
//
//// Create instance of Person
//
//// Using setter and getter
///


// What is class and instance

require_once './Person.php';
require_once './Student.php';

//$p = new Person('Zura', 28, null);
//echo $p->name.'<br>';
//echo $p->age.'<br>';
//echo $p->getSalary().'<br>';
//$p->setSalary(100);
//echo $p->getSalary().'<br>';

$s = new Student("George", '23', 1234);
echo $s->name . '<br>';
echo $s->age . '<br>';
echo $s->stId . '<br>';