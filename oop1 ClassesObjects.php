<?php 

class Fruits //class
{
    //Properties
    public $nameFruit;
    public $colorFruit;

    //Methods
    function set_name($nameFruit) //set
    {
        $this->nameFruit = $nameFruit;
    }
    function get_name()//get
    {
        return $this->nameFruit;
    } 


    function set_color($colorFruit)
    {
        $this->colorFruit = $colorFruit;
    }
    function get_color()
    {
        return $this->colorFruit;
    } 
}

//object
$apple = new Fruits();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Fruit name:". $apple->get_name() ."\n";
echo "Fruit color:". $apple->get_color() ."\n";

?>