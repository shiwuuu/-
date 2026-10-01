<?php

class BankAccount {
    public $owner;
    public $balance;

    public function __construct($owner, $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
    }
    public function deposit($amount) {
        $this->balance += $amount;
        return $this;
    }
    public function withdraw($amount) {
        $this->balance -= $amount;
        return $this;
    }
    public function getBalance() {
        return $this->balance;
    }
}
$account = new BankAccount("Иван", 1000);
$account->deposit(500);
$account->withdraw(200);
echo $account->getBalance();