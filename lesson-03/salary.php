<?php

$basicSalary = 20000;
$bonus = 5000;
$taxRate = 10;


$GrossSalary = $basicSalary + $bonus;

$Tax = ($GrossSalary * $taxRate) / 100;

$NetSalary = $GrossSalary - $Tax;

echo "Gross Salary:"  . $GrossSalary ;
echo "Tax: ". $Tax;
echo "Net Salary:" . $NetSalary;


?>