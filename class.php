<?php

class Dog
{
    public $name = 'Hachi';

    public function bark()
    {
        echo "わん";
    }
}

$a = new Dog(); //オブジェクトを生成する

$a->bark();
echo "\n";
echo $a->name;
echo "\n";
