<?php
require_once "classe/BankAccount.class.php";

$p1 = new BankAccount(1111, "Guilherme");
$p2 = new BankAccount(2222, "Pedro");


echo "<pre>";
print_r($p1);
print_r($p2);
echo "</pre>";