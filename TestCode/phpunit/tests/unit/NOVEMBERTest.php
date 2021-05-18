<?php

class NOVEMBERTest extends \PHPUnit\Framework\TestCase
{
    protected $november;

    public function testsend(){

        $this->november = new \App\Models\NOVEMBER;

        $this->november->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->november->sendreturn(),1800);

        $this->november->receivecalculate(array(200,250,750));

        $this->assertEquals($this->november->receivereturn(),1200);

        
        $this->november->setstatement("receive",500);

        $this->assertEquals($this->november->showstatement(),"you received 500 Taka");

        
    }
}
?>