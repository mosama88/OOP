<?php




class AccountTwo
{
    public string $name;
    public float $balance;

    public function __construct($nameAcc, $balanceAcc)
    {
         $this->name = $nameAcc;
         $this->balance = $balanceAcc;
    }
}