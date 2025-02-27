<?php

declare(strict_types=1);

require_once 'Classes/Account.php';
require_once 'Classes/AccountTwo.php';




$myAccount = new Account();
$OsamaAccount = new Account();

$myAccount->name = 'Mohamed Osama';
$OsamaAccount->balance = 50.5;

var_dump($myAccount->name);
echo "<br>";
var_dump($OsamaAccount->balance);


echo "<br>";



$myAccountTow = new AccountTwo("Abbas", 70, 5);
$OsamaAccountTow = new AccountTwo("Fawzy", 80, 5);



var_dump($myAccountTow);
echo "<br>";
var_dump($OsamaAccountTow);