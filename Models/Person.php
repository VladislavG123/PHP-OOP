<?php

class Person
{
    private $age;
    private $satiety;

    public function getAge()
    {
        return $this->age;
    }

    function __construct($age){
        $this->age = $age;
        $this->satiety = 100;
    }

    public  function growUp($on = 1){
        $this->age += $on;
    }

    public function spendTime(){
        $this->satiety -= rand(10, 50);

        if($this->satiety <= 0)
            die ("You died");
    }

    public  function  isHungry(){
        return $this->satiety <= 51;
    }

    public function eatFood(){
        $this->satiety += rand(10, 50);

        if($this->satiety > 100)
            die ("You pereel");
    }
}