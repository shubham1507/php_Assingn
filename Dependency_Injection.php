<?php

//depedency used for code reusability

class logger{
    
    public function log($msg)
    {
        echo 'Logging messege:'.$msg;
    }
}


class user{
    private $logger;
    public function createUser(){
      //  $log=new logger();
      $this->logger->log("user created".'<br>');

    }
    public function userReg(){
        //$log=new logger();
         $this->logger->log("User registerd".'<br>');
    }
    public function logout()
    {
        
         $this->logger->log("oh..logged out");
    }
    public function __construct($logger) {
        $this->logger=new logger();
    }
}
$profile=new user();
$profile->createUser();
$profile->userReg();