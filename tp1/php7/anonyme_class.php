<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 27/01/2018
 * Time: 11:10
 */
interface Logger{
    public function log(string $msg);
}

class Application{
    private $logger;
    public function getLogger():Logger{
        return $this->logger;
    }
    public function setLogger(Logger $logger){
        $this->logger=$logger;
    }
}
$app=new Application;
$app->setLogger(new class implements Logger{
    public function log(string $msg)
    {
        // TODO: Implement log() method.
        print($msg);
    }
});
$app->getLogger()->log("My first Log Message");