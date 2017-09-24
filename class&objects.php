<?php
/*
we have just implemented class but object yet to be define ...in real world just like object... its has properties and behaviour
 * which is implemented using variables and methos resp,. here model and volu are properties while up dwn are its behaviour */
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
/* 1st object is defined*/
echo '1st object is defined ie.,tv_one';
echo '<br>';
$tv_one=new Tv;
echo $tv_one->volume;
$tv_one->volUp();
echo '<br>';
echo $tv_one->volume;
echo '<br>';
$tv_one->volDwn();
echo $tv_one->volume;
echo '<br>';
echo '2nd object is defined ie.,tv_two';
echo '<br>';

$tv_two=new Tv;

echo $tv_two->volume;
echo '<br>';
$tv_two->volUp();
$tv_two->volUp();
echo $tv_two->volume;/*so as we can see with every new release of tv we just  create An object and use it,with only 1 class ...hence reusability introduced */
echo '<br>';
echo $tv_one->model.'<br>';
echo $tv_two->model='abc'.'<br>';





?>