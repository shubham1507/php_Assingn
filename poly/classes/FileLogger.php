<?php

class  FileLogger implements LoggerInterface{
    public function log($msg){
        echo "logging msg to file:$msg";
    }
}