<?php

require 'vendor/autoload.php';

use Acme\Business;
use Acme\Person;
use Acme\Staff;


$staff = new Staff;
$zqdl = new Business($staff);
$zqdl->hiring(new Person('xudong'));
$zqdl->hiring(new Person('sbjsw'));

var_dump($staff->members());
