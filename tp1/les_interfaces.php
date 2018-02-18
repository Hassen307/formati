<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 20/01/2018
 * Time: 09:37
 */

interface abscisse{
    public function setx($x);
}
interface ordonnee{
    public function sety($y);
}
class pointaxe implements abscisse{
    private $x;
    public function setx($x)
    {
        // TODO: Implement setx() method.
        $this->x=$x;
    }
}
class pointplan implements abscisse,ordonnee{
    private $x;
    private $y;
    private $d;
    public function setx($x)
    {
        // TODO: Implement setx() method.
        $this->x=$x;
    }
    public function sety($y)
    {
        // TODO: Implement sety() method.
        $this->y=$y;
    }
    public function module($x,$y){
    $this->d=sqrt($x ** 2 + $y ** 2);
    print $this->d;
    }
}
$obj=new pointplan();
$obj->module(1,1);