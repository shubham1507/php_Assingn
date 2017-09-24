<?php

//literally abstract class means incomplete class
/*in given code let me tell u what  we did so far ...there is a compony named  blah blah blah  ,there exists 2 
 * category of emps fulltime and part time..since there are some common things in both of them, we created baseEmp class
and just inherited,now problem  is that if comppny outsourced this project and a devloper from another country which do not fall into these existing 
 * categories then( goto loc 53)*/
abstract class BaseEmp{

    protected $fname;
    protected $lname;
    public abstract function getmonthly_sal();/*as we know,abstract means incomplete, we are just declaring 
     abstract class and enforcing the developer to implement this method any  how  */

    public function getname()
    {
        return $this->fname."".$this->lname;
    }
    
    public function __construct($f,$l)
    {
        $this->fname=$f;
        $this->lname=$l;
        
    }
}
class FulltimeEmp extends BaseEmp{
    
    protected $annualsal=747878;
    
    public function getmonthly_sal()
    {
        return $this->annualsal/12;
    }
    
    

}

class ParrtimeEmp extends BaseEmp{
    protected  $hrRate=75;
    protected $totalhrs=200;
    public function getmonthly_sal()
    {
        return $this->hrRate*$this->totalhrs;
    }
}

$fulltime=new FulltimeEmp('fulltime','Employee');

$parttime=new ParrtimeEmp('parttime',' employee');

echo $fulltime->getname().'<br>';
echo $parttime->getname().'<br>';
echo $fulltime->getmonthly_sal().'<br>';
echo $parttime->getmonthly_sal().'<br>';
 //$empout=new BaseEmp('base',' emp');
//Fatal error: Uncaught Error: Cannot instantiate abstract class BaseEmp in C:\xampp\htdocs\php\5Abstract class.php:51 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php\5Abstract class.php on line 51
//echo $empout->getname();// as we can see there is no  base emp exist in reality , but it showing us so far..
// so to get rid of this problem we introduced Abstrct class(goto loc)...it means for abstract class we cant create
//object directly...only its inherited class can create its object...

