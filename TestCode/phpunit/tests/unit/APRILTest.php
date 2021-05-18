<?php

class APRILTest extends \PHPUnit\Framework\TestCase
{
    protected $april;

    public function testsend(){

        $this->april = new \App\Models\APRIL;

        $this->april->sendcalculate(array(250,400,50,100,100));

        $this->assertEquals($this->april->sendreturn(),900);

        $this->april->receivecalculate(array(200,250,1050));

        $this->assertEquals($this->april->receivereturn(),1500);

        $this->april->setstatement("receive",900);

        $this->assertEquals($this->april->showstatement(),"you received 900 Taka");





    }
}
?>