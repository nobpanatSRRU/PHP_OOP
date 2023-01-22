<?php

class Employee{
   public $name;
   public $department;
   public $salary;

   //getters
}


$empr = new Employee();
$empr->name = "Jenny";
$empr->department = "Accounting";
$empr->salary= 20000;

echo "ชื่อพนักงาน = ".$empr->name."</br>";
echo "แผนก = ".$empr->department."</br>";
echo "เงินเดือน = ".$empr->salary."</br>";

$empr2 = new Employee();
$empr2->name = "Kong";
$empr2->department = "IT";
$empr2->salary= 45000;

echo "ชื่อพนักงาน = ".$empr2->name."</br>";
echo "แผนก = ".$empr2->department."</br>";
echo "เงินเดือน = ".$empr2->salary."</br>";

$empr3 = new Employee();
$empr3->name = "Jo";
$empr3->department = "Sale";
$empr3->salary= 30000;

echo "ชื่อพนักงาน = ".$empr3->name."</br>";
echo "แผนก = ".$empr3->department."</br>";
echo "เงินเดือน = ".$empr3->salary."</br>";


?>