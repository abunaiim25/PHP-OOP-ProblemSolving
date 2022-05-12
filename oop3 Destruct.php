<?php 

class Fruit1 //class
{
    //Properties
    public $nameFruit;
    public $colorFruit;

    //Methods
    function __construct($nameFruit, $colorFruit)//constructor (set)
    {
        $this->nameFruit = $nameFruit;
        $this->colorFruit = $colorFruit;
    }
    
    function __destruct() //destruct (get)
    {
        echo "The fruit is {$this->nameFruit} and the color is {$this->colorFruit}.";
    }

}
 
//object
$apple = new Fruit1("Apple", "Red");
