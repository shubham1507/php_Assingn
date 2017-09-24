<?php
/*REUSABILITY OF CLASS
we have just implemented class but object yet to be define ...in real world just like object... its has properties and behaviour
 * which is implemented using variables and methos resp,. here model and volu are properties while up dwn are its behaviour */
class Tv{//parent class
    public $model;
    public $volume=1;
    //public $timer;
    
    function  volUp()
    {
        $this->volume++;
    }
    
    function volDwn()
    {
        $this->volume--;
    }
    //part2 construcor finction
    
    function __construct($m,$v) {
        $this->model=$m;
        $this->volume=$v;
    }
    
}

/*constructor function in php5 part 2*/
echo 'part 2'.'<br>';

$tv=new Tv('def',6);
$tv1=new Tv('jkl',9);

echo $tv->model.'<br>';

echo $tv->model='abc'.'<br>'; 
/*Now if u could observe at loc 35 we have changed model of a tv ...is it possibble in real life  to change the model no?..NO..so we need to p
protect this model property to be changed ...thi will be done using Encapsulation */


/*whats the need of constructor.....as we have defined @ loc 20...cant we directly intialize model @loc 6.?   NO...bcoz the class Tv wont be 
longer reusable...with the help of constructor we can create an object of any type which have variable model no. we need not to change class atall.  */
/*suppose we have launched a Tv which has a feature of timer...so shall we add $timer to existing class Tv NO...coz that will enable the timer feature to older 
Tv's which is completely stupidity...Hence we have implemented a new concept of inheritance in  which we just create a new class and extends older class */



//Inheritance

class TvWithTimer extends Tv// child class
{
    public $timer=true;
}

$timeTv=new TvWithTimer('TvWithTimer2342',8);//we have to pass arg to new object too else error will arise

echo $timeTv->model.'<br>';


class plazma extends Tv
{
    public $plazma=true;
}

$tvPlazma=new plazma('plazma123',10);//constrctr of parent class

echo $tvPlazma->model.'<br>';