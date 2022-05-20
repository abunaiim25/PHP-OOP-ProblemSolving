<?php 
// multiple parent to multiple child

trait oopParent1
{
    public function message1()
    {
        echo "message 1 for oopParent1. ";
    }
}
trait oopParent2
{
    public function message2()
    {
        echo "message 2 for oopParent2. ";
    }
}


class oopChild1
{
    use oopParent1;
}
class oopChild2
{
    use oopParent1, oopParent2;
}

//object
$obj1 = new oopChild1();
$obj1 -> message1();
echo "\n";

$obj2 = new oopChild2();
$obj2 -> message1();
$obj2 -> message2();
?>