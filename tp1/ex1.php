<?php
Class Action
{
    private $propnom;
    private $propcours;
    private $propbourse;


    public function __construct($propnom, $propcours)
    {
        $this->propnom = $propnom;
        $this->propcours = $propcours;
        $this->propbourse = "abc";
    }

    public function __destruct()
    {
        print "Destruction de " . $this->propnom . "\n";
    }
}
$x=new Action("hassen","php");
$y=new Action("asus","pc");
$alcotel=new Action("123","456");
$ref=&$y;
$ref2=$alcotel;


