<?php

class Product{
    private $description;
    private $code;
    private $value;
    private $quantity;

    public function __construct($d, $c, $v, $q) {
        $this->setDescription($d);
        $this->setCode($c);
        $this->setValue($v);
        $this->setQuantity($q);
    }

    public function getDescription() {
        return $this->description;
    }
    public function setDescription($d) {
        $this->description = $d;
    }
    public function getCode() {
        return $this->code;
    }
    public function setCode($c) {
        $this->code = $c;
    }
    public function getValue() {
        return $this->value;
    }
    public function setValue($v) {
        $this->value = $v;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function setQuantity($q) {
        $this->quantity = $q;
    }

}
