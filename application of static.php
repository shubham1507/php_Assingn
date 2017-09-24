<?php
class staticUse{
    public static $objcnt=0;
    
    public static function getcnt()
    {
        return self::$objcnt;
    }
    public function __construct()
    {
        self::$objcnt++;
    }
    // we use constructer for changing/updating/using the member variables (here objcnt) by the vicinity  of class intervention
}

$a=new staticUse();
$b=new staticUse();
$c=new staticUse();
echo staticUse::getcnt();

class abc extends staticUse{
    public static function getcnt()//overriddenn method 
    {
        // here we are expecting parentclass getcnt() hence
        parent::getcnt();
        //here onwards we can add new functionality to child grtcnt()
    }
}

// we will look around late static binding function