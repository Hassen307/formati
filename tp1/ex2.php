<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 13/01/2018
 * Time: 11:23
 */

Class Varchar{
 private $x;
 private $type;
    public function __construct($x,$type)
    {
        $this->x=$x;
        $this->type=$type;
    }

    public function add($second){
        $this->x.=$second;
        $this->type="varchar";
    }

    public function getch(){
        print "Type=" . $this->type . "\n";
    }


}

$y=new Varchar("a","string");
$y->getch();
$y->add("b");
$y->getch();