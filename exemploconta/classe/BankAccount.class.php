<?php

class BankAccount {
    public $number;
    protected $type;
    private $owner;
    private $balance;
    private $status;

    public function __construct($number, $owner) {
        $this->setNumber($number);
        $this->setOwner($owner);
        $this->setBalance(0);
        $this->setStatus(false);
    }

    public function getNumber() {
        return $this->number;
    }
    
    public function setNumber($number) {
        $this->number = $number;
    }

    public function getType() {
        return $this->type;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
    
    public function getOwner() {
        return $this->owner;
    }
    
    public function setOwner($owner) {
        $this->owner = $owner;
    }
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function OpenAccount($type) {
        $this->setType($type);
        $this->setStatus(true);
        if ($this->getType()== "cc"){
            $this->setBalance(50);
        }
        else{
            $this->setBalance(150);
        }
    }
    
    public function CloseAccount() {
        if ($this->getBalance() > 0) {
            echo "<p>A conta tem dinheiro.</p>";
        }
        elseif ($this->getBalance() < 0) {
            echo "<p>A conta está em débito.</p>";
        }
        else{
            $this->setStatus(false);
        }
    }

    public function Depostit($value) {
        if ($this->getStatus()){
            $this->setBalance($this->getBalance() + $value);
        } 
        else{
            echo "<p>Impossível depositar</p>";
        }
    }

    public function Withdraw($value) {
        if ($this->getStatus()){
            if ($this->getBalance() >= $value){
                $this->setBalance($this->getBalance() - $value);
            }
            else{
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }
        else{
            echo "<p>Impossível sacar.</p>";
        }
    }

    public function PayMonthly() {
        if ($this->getType() == "cc"){
            $value = 12;
        }
        else if ($this->getType()== "cp"){
            $value = 20;
        }

        if ($this->getStatus()){
            if ($this->balance > $value){
                $this->setBalance($this->getBalance() - $value);
            }
            else{
                echo "<p>Saldo insuficiente.</p>";
            }
        }
        else{
            echo "Impossível pagar.";
        }
    }
}