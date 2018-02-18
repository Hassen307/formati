<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/01/2018
 * Time: 09:49
 */
function foo(int $var){
    return gettype($var);
}

var_dump(foo(1));
var_dump(foo('1'));
var_dump(foo(1.2));