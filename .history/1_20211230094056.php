<?php
class Animal
{
    public $name;
    protected $age;
    private $weight;

    public function _construct($name,$age,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }

    public function animalShowData()
    {
        echo "暱稱: $this->name <br>";
        echo "年齡: $this->age <br>";
        echo "體重: $this->weight <br>"; 
    }
}