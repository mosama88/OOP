<?php

namespace Task_one;

class Employee
{
    protected string $name;
    protected string $position;
    protected float $salary;

    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function displayInfo()
    {
        echo "Name: {$this->name}, Position: {$this->position},Salary:{$this->salary}'/ln'";
    }
}


// Manager class - Inheritance
class Manager extends Employee
{
    private int $team_size;

    public function __construct($name, $salary, $team_size)
    {
        parent::__construct($name, "Manager", $salary);
        $this->team_size = $team_size;
    }
    public function displayInfo()
    {
        echo "Name: {$this->name}, Position: {$this->position},Salary:{$this->salary},
        Team Size: {$this->team_size}'/ln'";
    }
}

class Developer extends Employee
{
    private string $programming_language;
    public function __construct($name, $salary, $programming_language)
    {
        parent::__construct($name, "Developer", $salary);
        $this->programming_language = $programming_language;
    }
    public function displayInfo()
    {
        echo "Name: {$this->name}, Position: {$this->position},Salary:{$this->salary},
        Programming Language: {$this->programming_language}'/ln'";
    }
}

class company
{
    private array $employees = [];
    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }
    public function displayEmployees()
    {
        foreach ($this->employees as $employee) {
            $employee->displayInfo();
        }
    }
}

// $manager = new Manager("Jane Smith", 8000, 5);
// $manager2 = new Manager("Mohamed Osama", 50000, 10);

// $developer = new Developer("Mostafa Mahfouz", 5000, "Paython");
// $developer2 = new Developer("Amr Mosa", 30000, "Java");


$company = new Company();

$employee1 = new Employee("Mohamed Osama", "Employee", 50000);
$manager = new Manager("Jane Smith", 8000, 5);
$developer = new Developer("Mostafa Mahfouz", 5000, "Paython");


echo "<pre>";
$company->addEmployee($employee1);
$company->addEmployee($manager);
$company->addEmployee($developer);

print_r($company);
echo "<br>";