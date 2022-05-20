<?php
class constantsNotChange
{
    const message = "1 Constants cannot be changed once it is declared.";
}
echo constantsNotChange::message;
?>



<?php
class constantsNotChange2
{
    const message = "2 Constants cannot be changed once it is declared.";

    public function constantMethod()
    {
        echo self::message;
    }
}
//object
$myContsnts = new constantsNotChange2();
$myContsnts -> constantMethod();
?>