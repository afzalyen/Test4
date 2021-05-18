<?php

class MARCHTest extends \PHPUnit\Framework\TestCase
{
    protected $march;

    public function testsend(){

        $this->march = new \App\Models\MARCH;

        $this->march->sendcalculate(array(650,500,50,100,100));

        $this->assertEquals($this->march->sendreturn(),1400);

        $this->march->receivecalculate(array(200,250,1750));

        $this->assertEquals($this->march->receivereturn(),2200);

        $this->march->setstatement("receive",700);

        $this->assertEquals($this->march->showstatement(),"you received 700 Taka");





    }
}
?>