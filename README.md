# PHP_OOP Learning
#### 64222200111 นายนพนัฐ ตันยอด คณะอุตสาหกรรม สาขาเทคโนโลยีคอมพิวเตอร์

#### การบ้านPHP_15_01_2566

      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Homework 15-01-66</title>
      </head>
      <body>
          <?php 
          $A1 = 5+8*9;
          $A2 = 10-4+2;
          $A3 = 10-(2+1);
          $A4 = 5*2-40/5;
          $A5 = 7+8/2+25;
          echo "การบ้าน PHP 15/01/2566<br><br>";
          echo "1. 5+8*9 = " . $A1 . "<br>";
          echo "2. 10-4+2 = " . $A2 . "<br>";
          echo "3. 10-(2+1) = " . $A3 . "<br>";
          echo "4. 5*2-40/5 = " . $A4 . "<br>";
          echo "5. 7+8/2+25 = " . $A5 . "<br>";
          echo "<br>นายนพนัฐ ตันยอด<br>" . "รหัสนักศึกษา 64222200111";
          ?>
      </body>
      </html>

![การบ้านPHP_15_01_2566](https://github.com/nobpanatSRRU/PHP_OOP/blob/main/images/Screenshot%202566-01-22%20at%2021.05.17.png?raw=true)

#### 01AttrP
      <?php
      class Employee{
         private $name;
         private $department;
         private $salary;

         //getters
      }
      $empr = new Employee();
      $empr->name = "Jenny";
      $empr->department = "Accounting";
      $empr->salary= "20000";

      echo "ชื่อพนักงาน = ".$empr->name."</br>";
      echo "แผนก = ".$empr->department."</br>";
      echo "เงินเดือน = ".$empr->salary."</br>";

      $empr2 = new Employee();
      $empr2->name = "Kong";
      $empr2->department = "IT";
      $empr2->salary= "45000";

      echo "ชื่อพนักงาน = ".$empr2->name."</br>";
      echo "แผนก = ".$empr2->department."</br>";
      echo "เงินเดือน = ".$empr2->salary."</br>";

      $empr3 = new Employee();
      $empr3->name = "Jo";
      $empr3->department = "Sale";
      $empr3->salary= "30000";

      echo "ชื่อพนักงาน = ".$empr3->name."</br>";
      echo "แผนก = ".$empr3->department."</br>";
      echo "เงินเดือน = ".$empr3->salary."</br>";

      ?>

![02Meth](https://github.com/nobpanatSRRU/PHP_OOP/blob/main/images/Screenshot%202566-01-22%20at%2020.25.47.png?raw=true)

#### 02Meth
      <?php

      class Employee{
       private $name;
       private $department;
       private $salary;

       //getters

       public function getName(){
          return $this->name;
       }
       public function getDepartment(){
          return $this->department;
       }
       public function getSalary() {
          return $this->salary;
       }

       //setters
       public function setName($v) {
          $this->name = $v; 
       }
       public function setDepartment($v) {
          $this->department = $v; 
       }

       public function setSalary($v) {
          $this->salary = $v; 
       }
    }


          $empr = new Employee();
          $empr->setName("Jenny");
          $empr->setDepartment("Accounting");
          $empr->setSalary(20000);

          $name = $empr->getName();
          $department = $empr->getDepartment();
          $salary = $empr->getSalary();

          echo "ชื่อพนักงาน = ".$name."</br>";
          echo "แผนก = ".$department."</br>";
          echo "เงินเดือน = ".$salary."</br>";

          $empr2 = new Employee();
          $empr2->setName("Kong");
          $empr2->setDepartment("IT");
          $empr2->setSalary(45000);

          $name = $empr2->getName();
          $department = $empr2->getDepartment();
          $salary = $empr2->getSalary();

          echo "ชื่อพนักงาน = ".$name."</br>";
          echo "แผนก = ".$department."</br>";
          echo "เงินเดือน = ".$salary."</br>";

          $empr3 = new Employee();
          $empr3->setName("Jo");
          $empr3->setDepartment("Sale");
          $empr3->setSalary(3000);

          $name = $empr3->getName();
          $department = $empr3->getDepartment();
          $salary = $empr3->getSalary();

          echo "ชื่อพนักงาน = ".$name."</br>";
          echo "แผนก = ".$department."</br>";
          echo "เงินเดือน = ".$salary."</br>";


    ?>

![02Meth](https://github.com/nobpanatSRRU/PHP_OOP/blob/main/images/Screenshot%202566-01-22%20at%2020.25.11.png?raw=true)
