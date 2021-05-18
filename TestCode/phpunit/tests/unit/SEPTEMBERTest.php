<?php

class SEPTEMBERTest extends \PHPUnit\Framework\TestCase
{
    protected $september;

    public function testsend(){

        $this->september = new \App\Models\SEPTEMBER;

        $this->september->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->september->sendreturn(),1800);

        $this->september->receivecalculate(array(200,250,1050));

        $this->assertEquals($this->september->receivereturn(),1500);

        
        $this->september->setstatement("send",1500);

        $this->assertEquals($this->september->showstatement(),"you send 1500 Taka");

        
    }
}
?>