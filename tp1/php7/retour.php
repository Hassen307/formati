<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/01/2018
 * Time: 10:19
 */
declare(strict_types=1);
function returnINValue(int $value):int{
    return intval($value+1.0);// intval forcer to integer
}
print_r(returnINValue(5));