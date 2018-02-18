<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/01/2018
 * Time: 10:04
 */
declare(strict_types=1);//cette déclartion doit etre mise au début de chaque fichier
function foo(int $var){
    return gettype($var);
}

foo(1);
foo('1');
foo(1.2);
