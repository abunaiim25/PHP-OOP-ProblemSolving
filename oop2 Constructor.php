<?php 

class Fruit //class
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
    
    function get_name()//get
    {
        return $this->nameFruit;
    } 
    function get_color()
    {
        return $this->colorFruit;
    } 
}

//object
$apple = new Fruit("Apple", "Red");
echo "Fruit name: ". $apple->get_name() ."\n";
echo "Fruit color: ". $apple->get_color() ."\n";

?>