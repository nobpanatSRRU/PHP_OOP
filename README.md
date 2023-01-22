# PHP_OOP Learning
#### 64222200111 นายนพนัฐ ตันยอด คณะอุตสาหกรรม สาขาเทคโนโลยีคอมพิวเตอร์

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
