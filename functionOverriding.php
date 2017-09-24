<?php

class Tv{
    public $model ='xyz';
    public $volume=1;
    
    function  volUp()
    {
        $this->volume++;
    }
    
    function volDwn()
    {
        $this->volume--;
    }
   
    
  
    
}

class plazmaTv extends Tv{
    public $model='abc';// overriden variables
            function __construct() {/*since method is overriden prio will be gin to new constr/...*/
        
    }
}
$plazma=new plazmaTv;//child's class construcr...overridden constr..

echo $plazma->model;

