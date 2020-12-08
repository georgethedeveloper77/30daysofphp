<?php
/**
 * User: George
 * Date: 12/08/2020
 * Time: 5:49 PM
 */


require_once './Person.php';

class Student extends Person
{
    public int $stId;
    public function __construct($name, $age, $stId)
    {
        $this->stId = $stId;
        parent::__construct($name, $age, null);
    }
}

//oop
//crud