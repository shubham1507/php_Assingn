<?php

class Userpro{
    private $logger;
    public function CreateUser(){
        echo "creating user";
        $this->logger->log("User created");
    }
    
    public function UpdateUser(){
        echo "user Updated";
        $this->logger->log("User updated");
    }
    
    public function UserLoggedOut(){
        echo "user logged out";
        $this->logger->log("user just logged ");
    }
    public function __construct(LoggerInterface $logger) {//type hinting 
        /*Fatal error: Uncaught TypeError: Argument 1 passed to Userpro::__construct() must be an instance of Logger, instance of FileLogger given, called in C:\xampp\htdocs\php\polymorphism\index.php on line 20 and defined in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php:19 Stack trace: #0 C:\xampp\htdocs\php\polymorphism\index.php(20): Userpro->__construct(Object(FileLogger)) #1 {main} thrown in C:\xampp\htdocs\php\polymorphism\classes\UserPro.php on line 19*/
 //since the Logger $logger is previous type hinting we have to change to FileLogger $logger
 
        $this->logger=$logger;
    }/* by means of using type hinting in constructer we are recieving object of Logger  class in $logger private var   
     */
}
// now finally with the introduction to interface we change type hinting to LoggerInterface