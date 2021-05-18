<?php

class JULYTest extends \PHPUnit\Framework\TestCase
{
    protected $july;

    public function testsend(){

        $this->july = new \App\Models\JULY;

        $this->july->sendcalculate(array(650,500,50,100,300));

        $this->assertEquals($this->july->sendreturn(),1600);

        $this->july->receivecalculate(array(200,250,750));

        $this->assertEquals($this->july->receivereturn(),1200);

        
        $this->july->setstatement("receive",900);

        $this->assertEquals($this->july->showstatement(),"you received 900 Taka");

        
    }
}
?>