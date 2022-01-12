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

class Dog extends Animal
{
    public function dogShowData()
    {
        echo "暱稱: $this->name <br>";
        echo "年齡: $this->age <br>";
        echo "體重: $this->weight <br>"; 
    }
}

$myDog = new Dog('多多',3,'3KG');

//1.測試自身類別讀取屬性
// $myDog->animalShowData();

// 2.測試物件可以讀取的屬性
echo $myDog->name;
// echo $myDog->age;
// echo $myDog->weight;