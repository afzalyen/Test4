<?php

class JUNETest extends \PHPUnit\Framework\TestCase
{
    protected $june;

    public function testsend(){

        $this->june = new \App\Models\JUNE;

        $this->june->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->june->sendreturn(),1800);

        $this->june->receivecalculate(array(200,250,750));

        $this->assertEquals($this->june->receivereturn(),1200);

        
        $this->june->setstatement("receive",500);

        $this->assertEquals($this->june->showstatement(),"you received 500 Taka");

        
    }
}
?>

