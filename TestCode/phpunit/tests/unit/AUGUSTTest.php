<?php

class AUGUSTTest extends \PHPUnit\Framework\TestCase
{
    protected $august;

    public function testsend(){

        $this->august = new \App\Models\AUGUST;

        $this->august->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->august->sendreturn(),1800);

        $this->august->receivecalculate(array(200,250,750));

        $this->assertEquals($this->august->receivereturn(),1200);

        
        $this->august->setstatement("receive",500);

        $this->assertEquals($this->august->showstatement(),"you received 500 Taka");

        
    }
}
?>