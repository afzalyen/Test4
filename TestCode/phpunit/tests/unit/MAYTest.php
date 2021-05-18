<?php

class MAYTest extends \PHPUnit\Framework\TestCase
{
    protected $may;

    public function testsend(){

        $this->may = new \App\Models\MAY;

        $this->may->sendcalculate(array(650,500,50,100,100));

        $this->assertEquals($this->may->sendreturn(),1400);

        $this->may->receivecalculate(array(200,250,1750));

        $this->assertEquals($this->may->receivereturn(),2200);

        $this->may->setstatement("send",1700);

        $this->assertEquals($this->may->showstatement(),"you send 1700 Taka");





    }
}
?>