<?php

$x=new ConstructorDestructor();

class ConstructorDestructor {
    //constructor
    public function __construct(){
        echo 'Se ha ejecutado el constructor<br>';
    }
    //destructor
    public function __destruct(){
        echo 'Se ha ejecutado el destructor<br>';
    }
}
