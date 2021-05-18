<?php

class DECEMBERTest extends \PHPUnit\Framework\TestCase
{
    protected $december;

    public function testsend(){

        $this->december = new \App\Models\DECEMBER;

        $this->december->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->december->sendreturn(),1800);

        $this->december->receivecalculate(array(200,250,750));

        $this->assertEquals($this->december->receivereturn(),1200);

        
        $this->december->setstatement("send",500);

        $this->assertEquals($this->december->showstatement(),"you send 500 Taka");

        
    }
}
?>