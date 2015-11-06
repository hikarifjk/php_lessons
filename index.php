<?php

$name = "taguchi";
$s1 = "hello {$name}! \n hello again!";
$s2 = 'hello $name! \n hello again!';
var_dump($s1);
var_dump($s2);

$s = "hello " . "world";
var_dump($s);
