<?php
class Account
{
    public $blance;
    public function deposite($amount)
    {
        echo "Depositing $amount tk in your account" . PHP_EOL;
    }
    public function widthdraw($amount)
    {
        echo "Widthdrawing $amount tk from your account" . PHP_EOL;
    }
}
