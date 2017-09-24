<?php

//for sake of understanding this concept plz run either of the commenred snippet  on
/* so in that case , as we know when we use static keyword we use self:: to access static vars/*/
/*
class abc{
       protected static $table='Basetable';
    public function select(){
        echo 'select * from'.self::$table;
    }
    public function insert(){
        echo 'insert into'.self::$table;
    }
            
            
}
class xyz extends abc{
    protected static $table='abc';
}
$abc=new abc;

echo $abc->select();*/


//so if u could observe 'select * from Basetable' is the o/p it should be 'select * from abc' whyy this would happen
/* here is the logic, actually while compile time whereever there is self::$table ,Basetable is placed on run time*/

class abc{
       protected static $table='Basetable';
    public function select(){
        echo 'select * from'.static::$table;
    }
    public function insert(){
        echo 'insert into'. static::$table;
    }
            
            
}
class xyz extends abc{
    protected static $table ='abc';
}
$abc=new abc;

 $abc->select();

/*if we replace self by static it will be 'Late static biding', it will inform compiler that to skip the compiling $table...or just delay its compiltion and let the object to be made then after on runtime replace the $table*/
//https://www.youtube.com/watch?v=XPAlstOuPNc