<?php


class Car

{

    private $color = 'red';
    private $weight = 200;

    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }

       public function getColor(){
           return $this->color;
        }

        public function __destruct(){
            echo "I'm destroyed: " .$this->color.PHP_EOL;

        }

    // //public, private, protected...are visibilty
    // private $color = 'black';
    // public $weight;
    // private  $year;
    // private $availableColors = [ 'red', 'green', 'blue', 'yellow'];

    // //Method ...access...private
    // public function  setYear($year){
    //     $this->year=$year;
    // }

    // public function setColor($color){

    //     if(in_array($color, $this->availableColors)){
    //         $this->color = $color;
    //     }

    //    // $this->color = color;
    // }

    // public function getColor(){
    //     return $this->color;
    // }

}


$myCar = new Car('green', 2500);
$myCar2 = new Car('white', 1800);
echo $myCar->getColor(). PHP_EOL;
echo  $myCar2->getColor(). PHP_EOL;

unset($myCar);
//sleep(seconds: 2);
// //instance
// $myCar = new Car();
// $myCar->setColor( 'green');
// $myCar->setYear(2010);

// //echo $myCar->color;