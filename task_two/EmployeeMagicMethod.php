<?php



class Employee
{

    public array $prop = [];

    //name grade salary department
    public function __construct(
        private string $name,
        private string $grade,
        private float $salary,
        private string $department
    ) {
        $this->prop['name'] = $name;
        $this->prop['grade'] = $grade;
        $this->prop['salary'] = $salary;
        $this->prop['department'] = $department;
    }


    // public function __destruct()
    // {
    //     echo "الموظف {$this->name} تم إنهاؤه من الذاكرة.<br>";
    // }


    // public function __call($name, $arg)
    // {
    //     echo "This function Not Found {$name}<br>";
    // }


    // public static function __callStatic($name, $argument)
    // {
    //     echo "This function Not Found {$name}<br>";
    // }

    public function __get($name)
    {
        return $this->prop[$name] ?? null;
    }
    public function __set($name, $value)
    {
        $this->prop[$name] = $value;
    }

    public function __unset($name)
    {
        unset($this->prop[$name]);
    }


    public function __clone()
    {
        echo "This Data For  This Employee";
    }
}
$employee = new Employee("Mohamed Osama", "grade 3", 5500.300, "IT");
$employee->birth_date = "28/3/1988";
$employee->age = 37;
$employee2 = clone $employee;
echo "<pre>";
print_r($employee);
echo "</pre>";