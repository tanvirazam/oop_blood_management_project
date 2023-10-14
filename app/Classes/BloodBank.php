<?php 
namespace app\Classes;
use app\Classes\BloodDonar;
use app\Interfaces\BloodBankInterface;
use app\Traits\BloodTestTrait;



class BloodBank implements BloodBankInterface{

    use BloodTestTrait;

    private $donars=[];
    
    public function receiveBlood(BloodDonar $donar){
            $this->donars[]=$donar;

            echo "Blood Received From Donar :" .$donar->getName() ."/n";
    }
   
    public function getDonarsByBloodGroup( $bloodGroup ){
        $maching=[];

        foreach($this->donars as $valuDonar){
            if($valuDonar->getBloodGroup() === $bloodGroup){
                $maching[]=$valuDonar;
            }
        }
        return $maching;
    }

    public function displayDonars(){
        echo "List of donar /n";

        foreach($this->donars as $donar){
            echo $donar->displayDonarInfo() ."/n";
            echo $this->testBloodGroup($donar) ."/n";

        }
    }

}