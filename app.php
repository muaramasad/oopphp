<?php

use Vnvmedia\Users\Person;
use Vnvmedia\Staff;
use Vnvmedia\Bussines;

$muharram = new Person("Muharram Asad");

$staff = new Staff([$muharram]);

$vnvmedia = new Bussines($staff);

$vnvmedia->hire(new Person("Jhon Skyway"));

var_dump($vnvmedia->getStaffMembers());