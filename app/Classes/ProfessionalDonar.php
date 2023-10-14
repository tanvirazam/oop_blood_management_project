<?php 
namespace app\Classes;

use app\Classes\BloodDonar;

class ProfessionalDonar extends BloodDonar{
    public function donateBlood(){
        echo $this->name ."is professional Donate Blood /n";
    }
}