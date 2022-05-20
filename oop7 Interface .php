<?php
//here we can not use parameter &&  all parentClass work on child class

// Interface definition
interface  oopParent
{
    public function message();
}

class catChild implements oopParent
{
    public function message()
    {
        echo "Meow\n";
    }
}

class dogChild implements oopParent
{
    public function message()
    {
        echo "Brak\n";
    }
}

class mouseChild implements oopParent
{
    public function message()
    {
        echo "Squeak\n ";
    }
}

// Create a list of animals
$cat = new catChild();
$dog = new dogChild();
$mouse = new mouseChild();

$parents = array($cat, $dog, $mouse);
foreach($parents as $item)
{
    $item -> message();
}

?>