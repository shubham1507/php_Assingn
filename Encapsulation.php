<?php
//Encapsulation--acces level--public private protected

class Tv{//parent class
    protected $model;
    public $volume=1;
    
    
    public function  volUp()
    {
        $this->volume++;
    }
    
    public function volDwn()
    {
        $this->volume--;
    }
    
    public function getModel()
    {
        return $this->model;
    }
            function __construct($m,$v) {
        $this->model=$m;
        $this->volume=$v;
    }
    
}

$tv3=new Tv('abc',1);
//echo $tv->model;
//Fatal error: Uncaught Error: Cannot access private property Tv::$model in   since $model is private

/*now it seems that over model no, is protected///but with private specifier we even cant echo themodel which is a big problem*/


/*so here we introduce getter and settr to tackl above problem*/

echo $tv3->getModel().'<br>';

class plazma extends Tv
{
    public function getModel() {
        return $this->model;
    }
    
}

$tv=new plazma("vbn", 2);

echo $tv->getModel();

//Notice: Undefined property: plazma::$model in C:\xampp\htdocs\php\Encapsulation.php on line 51  since model is private one