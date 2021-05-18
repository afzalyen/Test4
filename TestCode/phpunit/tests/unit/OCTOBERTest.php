<?php

class OCTOBERTest extends \PHPUnit\Framework\TestCase
{
    protected $october;

    public function testsend(){

        $this->october = new \App\Models\OCTOBER;

        $this->october->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->october->sendreturn(),1800);

        $this->october->receivecalculate(array(200,250,750));

        $this->assertEquals($this->october->receivereturn(),1200);

        
        $this->october->setstatement("receive",500);

        $this->assertEquals($this->october->showstatement(),"you received 500 Taka");

        
    }
}
?>