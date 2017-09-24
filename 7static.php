<?php

/* for any normal function we need an object to envoke it,but in case of static method ...we dont need object to be initialize*/

//normal function
/*
class abc{
 * public $data;
 public function xyz()
  {
 }} */

//in case of static 
class abc{
    public static $data=2;
    public static $size;

        public static function xyz()
    {
        echo 'its xyz function'.'<br>';
    }
    public static function getsize()
    {
        return self::$size;
    }
    public static function setsize($s)
    {
         self::$size=$s;
    }
}

//for printing $data or function xyz we need scope res operator

/*echo abc::$data.'<br>';
echo abc::xyz().'<br>';

$a=new abc();
$a->data='fgdg';
$b=new abc();
$b->data='bedh';

echo '$a->data';*/
/*
 * Notice: Accessing static property abc::$data as non static in C:\xampp\htdocs\php\7static.php on line 29

Notice: Accessing static property abc::$data as non static in C:\xampp\htdocs\php\7static.php on line 31
$a->data
 * 
 */
//static means its entirly dependand on class and not on  object
echo abc::xyz().'<br>';
echo abc::getsize().'<br>';
abc::setsize(1200);
echo abc::getsize().'<br>';
