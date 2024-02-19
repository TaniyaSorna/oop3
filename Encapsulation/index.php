<?php
class Info
{
    public $name;
    protected $income;
    private $age;

    // public function information() //without extends
    // {
    //     echo $this->income = 300;
    // }
}
class Bio extends Info
{
    public function information()
    {
        echo $this->income = 300;
    }
}
$bio = new Bio();
echo $bio->name = 'John Doe' . PHP_EOL;
$bio->information();
