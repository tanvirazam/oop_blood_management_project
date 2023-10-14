<?php

include 'autoloder.php';
use app\Classes\BloodBank;
use app\Classes\ProfessionalDonar;
use app\Classes\VoluntineDonar;


$donar1=new VoluntineDonar('jishan','A+',23);
$donar2=new VoluntineDonar('ayat','B-',24);
$donar3=new ProfessionalDonar('jishan','O-',53);


$blodBank=new BloodBank();

$blodBank->receiveBlood($donar1);
$blodBank->receiveBlood($donar2);
$blodBank->receiveBlood($donar3);

$blodBank->displayDonars();


echo "donar list".PHP_EOL;
$plusDonar=$blodBank->getDonarsByBloodGroup("A+");

foreach($plusDonar as $donar){
    $donar->displayDonarInfo();
}

$donarsAll=[$donar1, $donar2, $donar3];

foreach($donarsAll as  $resultDonar){
    $resultDonar->donateBlood();
}


