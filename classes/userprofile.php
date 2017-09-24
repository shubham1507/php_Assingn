<?php

class userprofile{
    private $logger;
    public function createUser(){
        echo 'User Created';
        $this->logger->log("user created");
        
    }
    
    public function updateUser(){
        echo 'user updated';
        $this->logger->log("user updated");
        }
     public function loggedout(){
         echo 'user logged out';
         $this->logger->log("awe...logged out");
         
     }
     public function __construct(logger $logger) {//logger $logger  type hinting
         
         $this->logger=$logger;
     }
}