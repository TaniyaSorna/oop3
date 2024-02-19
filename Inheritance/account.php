<?php
require 'Inheritance/index.php';

class CheckingAccount extends Account
{
    public function transfer($amount)
    {
        echo "Transfering $amount tk from your account" . PHP_EOL;
    }
}
$check = new CheckingAccount();
$check->deposite(1500);
$check->widthdraw(500);
$check->transfer(300);
