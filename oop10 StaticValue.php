<?php
class pi
{
    public static $value = 3.14159;
}
// Get static property
echo pi::$value;
?> 



<?php
class pi2
{
    public static $value = 3.14159;

    public function staticValue()
    {
        return self::$value;
    }
}
$pi = new pi2();
echo $pi->staticValue();
?> 





<?php
class pi3
{
    public static $value = 3.14159;
}

class x extends pi3
{
    public function xStatic()
    {
        return parent::$value;
    }
}
// Get value of static property directly via child class
echo x::$value;
// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?> 