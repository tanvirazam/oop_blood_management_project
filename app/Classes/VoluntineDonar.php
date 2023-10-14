<?php 
namespace app\Classes;

use app\Classes\BloodDonar;

class VoluntineDonar extends BloodDonar{
    public function donateBlood(){
        echo $this->name ."is donating blood /n";
    }
}