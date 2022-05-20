<?php

class Greeting //1
{
    public static function message()
    {
        echo "Assalamualikum";
    }
}
    // Call static method
    Greeting::message();
?>



<?php

class Greeting2 //2
{
    public static function message()
    {
        echo "Oalikum Assalam";
    }

    public function __construct()
    {
        self::message();
    }
}
new Greeting2();
?>




<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?> 