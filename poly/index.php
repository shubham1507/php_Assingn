<?php
 function __autoload($class){
     include_once"poly/classes/$class.php";
     //include_once '../polymorphism/classes/$class.php';
     /*
Warning: include_once(../polymorphism/classes/$class.php): failed to open stream: No such file or directory in C:\xampp\htdocs\php\polymorphism\index.php on line 3

Warning: include_once(): Failed opening '../polymorphism/classes/$class.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\php\polymorphism\index.php on line 3

Fatal error: Uncaught Error: Class 'Userpro' not found in C:\xampp\htdocs\php\polymorphism\index.php:6 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php\polymorphism\index.php on line 6
      
      *       */
 }
// $logger=new FileLogger();//new object for FileLogger 
 /*Fatal error: Uncaught TypeError: Argument 1 passed to Userpro::__construct() must be an instance of Logger, instance of FileLogger given, called in C:\xampp\htdocs\php\polymorphism\index.php on line 20 and defined in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php:19 Stack trace: #0 C:\xampp\htdocs\php\polymorphism\index.php(20): Userpro->__construct(Object(FileLogger)) #1 {main} thrown in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php on line 19*/
 //since the Logger $logger is previous type hinting we have to change to FileLogger $logger
 
 
 /*
        $pro=new Userpro();// i didnt put arg in constr.
  Fatal error: Uncaught ArgumentCountError: Too few arguments to function Userpro::__construct(), 0 passed in C:\xampp\htdocs\php\polymorphism\index.php on line 15 and exactly 1 expected in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php:19 Stack trace: #0 C:\xampp\htdocs\php\polymorphism\index.php(15): Userpro->__construct() #1 {main} thrown in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php on line 19 
  * 
  *   */
 
 
 /*with the emergance of new class we have to change the
  *  (type hinting)dependency   to each of the class , so to get rid of this we come up with
  POLYMORPHISM and implemented using interface

  * 
  *   */
 
 //for the ease of function we introduce a function getfun
 
  function getLogger($type){
     switch ($type){
         case 'email':
         return new EmailLogger();
         break;
           
         case 'file':
         return new FileLogger();
         break;
         
         
     }
 }
 
 
 $logger=getLogger('email');
 $pro=new Userpro($logger);
 $pro->CreateUser();
 
 
 