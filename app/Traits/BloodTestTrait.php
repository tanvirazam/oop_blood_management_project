<?php 
namespace app\Traits;
use app\Classes\BloodDonar;

trait BloodTestTrait{

    public function testBloodGroup(BloodDonar $donar){
        echo "Donar Name :" .$donar->getName() ."/n";
        echo "Blood Group :" .$donar->getBloodGroup() ."/n";
        echo "Blood Group is compliteate";
    }
}