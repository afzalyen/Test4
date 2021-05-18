<?php

class FEBRUARYTest extends \PHPUnit\Framework\TestCase
{
    protected $february;

    public function testsend(){

        $this->february = new \App\Models\FEBRUARY;

        $this->february->sendcalculate(array(650,500,50,100,500));

        $this->assertEquals($this->february->sendreturn(),1800);

        $this->february->receivecalculate(array(200,250,750));

        $this->assertEquals($this->february->receivereturn(),1200);

        
        $this->february->setstatement("send",500);

        $this->assertEquals($this->february->showstatement(),"you send 500 Taka");






    }
}
?>