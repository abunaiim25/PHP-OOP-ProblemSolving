
<?php

class oopParent
{

    public $quantity;
    public $place;

    public function __construct($quantity, $place)
    {
        $this->quantity = $quantity;
        $this->place = $place;
    }

    public function intro()
    {
        //  echo "I have {$this->quantity} acor land in {$this->place}.";
        return "I have {$this->quantity} acor land in {$this->place}.";
    }
}

// oopChild is inherited from oopParent
class oopChild extends oopParent
{
    public $department;
    public function __construct($quantity, $place, $department)
    {
        $this->quantity = $quantity;
        $this->place = $place;
        $this->department = $department;
    }

    public function message()
    {
        //echo $this -> intro();
        echo "I have {$this->quantity} acor land in {$this->place} and department {$this->department}. I am child and Now this is mine.";
    }
}
//object
//$house = new oopParent("20", "Chandpur");
$house = new oopChild("20", "Chandpur", "Chittagong");
$house->intro();
$house->message();


/*
class oopParent {

    public $quantity;
    public $place;

    public function __construct($quantity, $place)
    {
        $this->quantity = $quantity;
        $this->place = $place;
    }

    public function intro()
    {
        //  echo "I have {$this->quantity} acor land in {$this->place}.";
        return "I have {$this->quantity} acor land in {$this->place}.";
    }
}

// oopChild is inherited from oopParent
class oopChild extends oopParent
{
    public function message()
    {
        echo $this -> intro();
        echo " I am child and Now this is mine.";
    }
}

//object
//$house = new oopParent("20", "Chandpur");
$house = new oopChild("20", "Chandpur");
$house -> intro();
$house-> message();
*/






/*
class oopParent {

    public $quantity;
    public $place;

    public function __construct($quantity, $place)
    {
        $this->quantity = $quantity;
        $this->place = $place;
    }

    public function intro()
    {
        echo "I have {$this->quantity} acor land in {$this->place}.";
    }
}

// oopChild is inherited from oopParent
class oopChild extends oopParent
{
    public function message()
    {
        echo " I am child and Now this is mine.";
    }
}

//object
//$house = new oopParent("20", "Chandpur");
$house = new oopChild("20", "Chandpur");
$house -> intro();
$house-> message();
*/

?>
