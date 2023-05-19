<?php

use PHPUnit\Framework\TestCase;
use App\Models\Employee;

class EmployeeTest extends TestCase
{
    protected $employee;

    public function setUp(): void
    {
        $this->employee = new Employee;
    }

    /** @test */
    public function getEmployeeName(): void
    {
        $this->employee->setName('Does');

        $this->assertEquals($this->employee->getName(),'Does');
    }

    public function testGetEmployeeAge(): void
    {
        $this->employee->setAge(25);
        
        $this->assertEquals($this->employee->getAge(), 25);
    }

    public function testEmployeeNameAndAge(): void
    {
        $this->employee->setNameAndAge('Doe', 25);

        $this->assertEquals($this->employee->getNameAndAge(), ['Doe', 25]);
        $this->assertArrayHasKey(1, $this->employee->getNameAndAge());
    }
}