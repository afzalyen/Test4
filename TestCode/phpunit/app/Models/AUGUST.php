<?php
namespace App\Models;

class AUGUST
{


public $totalsend =0;
public $totalreceive =0;
public $act;
public $amount;


public function sendcalculate(array $send){
    for ($i=0; $i<count($send); $i++){
        $this->totalsend=$this->totalsend + $send[$i];
     
    }
}

public function sendreturn(){

    return $this->totalsend;
}

public function receivecalculate(array $receive){
    for ($i=0; $i<count($receive); $i++){
        $this->totalreceive=$this->totalreceive + $receive[$i];
     
    }
}

public function receivereturn(){

    return $this->totalreceive;
}

public function setstatement($User,$quantity){
    $this->act=$User;
    $this->amount=$quantity;

}

public function showstatement(){
    if($this->act=="send"){
        return "you send ".$this->amount." Taka";
    }
    else{
        return "you received ".$this->amount." Taka";

    }
}

}
?>


