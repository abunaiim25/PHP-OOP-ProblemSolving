<?php
//when we use abastruct, then all parentClass work on child class.

// Parent class
abstract class oopParent
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro() ;
}

// Child classes
class audiChild extends oopParent
{
    public function intro()
    {
        echo "$this->name...... when we use abastruct, then all parentClass work on child class.\n\n";
    }
}
// Child classes
class volvoChild extends oopParent
{
    public function intro()
    {
        echo "$this->name...... when we use abastruct, then all parentClass work on child class.";
    }
}


// Create objects from the child classes
$audi = new audiChild("Audi");
$audi->intro();
// Create objects from the child classes
$audi = new volvoChild("Volvo");
$audi->intro();
?>