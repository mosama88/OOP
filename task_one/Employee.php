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
$manager = new Manager("Jane Smith", 8000, 5);
$manager2 = new Manager("Mohamed Osama", 50000, 10);

echo "<pre>";
print_r($manager);
print_r($manager2);
