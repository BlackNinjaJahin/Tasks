<?php
class Employee {
    private $name;
    private $salary;

    // Constructor to initialize name and salary
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Getter for salary
    public function getSalary() {
        return $this->salary;
    }

    // Setter for salary with validation
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary must be positive.");
        }
    }
}

// Example usage
try {
    $employee = new Employee("John Doe", 5000);
    echo $employee->getName() . "'s salary: " . $employee->getSalary() . "\n";
    $employee->setSalary(6000);
    echo $employee->getName() . "'s new salary: " . $employee->getSalary() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
