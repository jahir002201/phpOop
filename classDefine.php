<?php

class Fruit{
    //Properties
    public $name;
    public $color;


    //Methods

    function __construct($name, $color){
        echo "My class name is Fruit:> \n";
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct(){
        echo "The fruit is {$this->name} and the color is {$this->color}.\n";
        echo "My class name is Fruit:< ";
    }
    function set_name($name){
    $this->name = $name;
    }
    function set_color($color){
        $this->color = $color;

    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new Fruit("apple","parpol");

echo $apple->get_name();

echo "\n";

echo $apple->get_color();
echo "\n";

var_dump($apple instanceof Fruit);


?>