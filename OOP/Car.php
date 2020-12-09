<?php


class Car
{
    //public, private, protected...are visibilty
    public $color;
    public $weight;
    private  $year;

    //Method ...access...private
    public function  setYear($year){
        $this->year=$year;
    }

}

//instance
$myCar = new Car();
$myCar->color = 'red';
$myCar->setYear(2010);

echo $myCar->color;