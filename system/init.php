<?php

spl_autoload_register(function($filename){
    include 'classes/'.$filename.'.php';
});

$rout = new rout();
