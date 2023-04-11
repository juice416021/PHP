<?php
interface Transportation
{
  public function gogo();
  public function stop();
}

abstract class AbstractTransportation implements Transportation
{
  protected $color;
  protected $transportation;
  protected $speed;

  public function __construct()
  {
    $this->color="白";
    $this->speed=0;
  }

  public function getspeed()
  {
    return $this->speed;
  }
  
  public function getcolor()
  {
    return $this->color;
  }

  public function gettransportation()
  {
    return $this->transportation;
  }

}

class Car extends AbstractTransportation
{
  public function __construct()
  {
  	parent::__construct();
    $this->transportation="汽車";
  }

  public function gogo()
  {
    $this->speed+=100;
  }

  public function stop()
  {
    $this->speed-=100;
  }
}

class Motorcycle extends AbstractTransportation
{
  public function __construct()
  {
  	parent::__construct();
    $this->transportation="機車";
  }
  
  public function gogo()
  {
    $this->speed+=50;
  }

  public function stop()
  {
    $this->speed-=50;
  }
}

$car=new Car();
echo "什麼車:".$car->gettransportation()."\n";
echo "顏色:".$car->getcolor()."\n";
$car->gogo();
echo "加速後速度:".$car->getSpeed()."\n";
$car->stop();
echo "減速後速度:".$car->getSpeed()."\n";
echo "\n";
$motorcycle=new Motorcycle();
echo "什麼車:".$motorcycle->gettransportation()."\n";
echo "顏色:".$motorcycle->getcolor()."\n";
$motorcycle->gogo();
echo "加速後速度:".$motorcycle->getSpeed()."\n";
$motorcycle->stop();
echo "減速後速度:".$motorcycle->getSpeed()."\n";
?>
