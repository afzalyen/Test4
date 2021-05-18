<?php

class JANUARYTest extends \PHPUnit\Framework\TestCase
{
    protected $january;

    public function testsend(){

        $this->january = new \App\Models\JANUARY;

        $this->january->sendcalculate(array(500,500,500));

        $this->assertEquals($this->january->sendreturn(),1500);

        $this->january->receivecalculate(array(300,300,400));

        $this->assertEquals($this->january->receivereturn(),1000);

        $this->january->setstatement("receive",500);

        $this->assertEquals($this->january->showstatement(),"you received 500 Taka");


     }
}
?>