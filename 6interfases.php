<?php

/*Its  same as abstract, but here in interface we have many methods already declared and its expected to be defined in desired 
class using 'implements' keyword */
interface abc{
public function  test();
public function xyz();
// we can observe its only declared and yet to be define or implement
}

interface mno{
public function test2();
}

class jkl implements abc{
    public function test()
    {
        echo 'test';
    }
    //Fatal error: Class jkl contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (abc::xyz) in C:\xampp\htdocs\php\6interfases.php on line 11
    public function xyz() {
        echo 'xyz';
    }
}
/*the difference between interface and inheritance is that in php there no concept of multiinhritance like in cpp but 
 * have multiinterface*/
/*Althogh its similer to abstract: the differences are  in interface class we cant define constrctr,variable private,protected specifier but this 
can be done in abstract class but...there is no multi-inheritance hence multiinterface come into picture  */
class multInterfaceEx implements abc,mno{
    public function  test(){
        echo 'from test.abc';
    }
    public function xyz() {
        echo 'from xyz.abc';
    }
    public function test2() {
        echo 'now its from test2';;
    }
    
}
$mult=new multInterfaceEx();

echo $mult->test().'<br>';
echo $mult->test2().'<br>';
echo $mult->xyz().'<br>';