<?php
class EmailLogger implements LoggerInterface{
    public function log($msg) {
        echo "loging msg to email:$msg";
    }
}
