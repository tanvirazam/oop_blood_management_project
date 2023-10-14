<?php 

namespace app\Interfaces;

use app\Classes\BloodDonar;

interface BloodBankInterface{
    public function receiveBlood(BloodDonar $donar);
    public function getDonarsByBloodGroup( $bloodGroup );

}