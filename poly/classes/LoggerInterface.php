<?php
interface LoggerInterface{
//public function  log();
    /*Fatal error: Declaration of FileLogger::log($msg) must be compatible with LoggerInterface::log() in C:\xampp\htdocs\php\polymorphism\classes\FileLogger.php on line 3*/
    public function  log($msg);
}