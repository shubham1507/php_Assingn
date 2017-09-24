<?php

function __autoload($class){
    include_once 'classes/$class.php';
}

$logger=new logger();
$profile=new userprofile();

$profile->createUser();