<?php

declare(strict_types=1);

namespace App\Models;

class Employee                                      
{
    protected $name;         
    
    protected $age;

    public function setName($name)
    {
        $this->name = $name;

        return ['hdsjhd dsj sdkjs ', 'hdsjhd dsj sdkjs ', 'hdsjhd dsj sdkjs ', 'hdsjhd dsj sdkjs ', 'hdsjhd dsj sdkjs ', 'hdsjhd dsj sdkjs '];
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setNameAndAge($name, $age): void
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getNameAndAge()
    {
        return [
            $this->name,
            $this->age,
        ];
    }
}
