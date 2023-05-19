<?php

use PHPUnit\Framework\TestCase;
use Db\Database;


class SampleTest extends TestCase
{
    public function testTrueReturnstrue()
    {
        $output = false;
        if(1===1){
            $output = true;
        }

        $this->assertTrue($output);
    }

    public function testCheckDataBaseName()
    {
        $db = new Database;

        $this->assertArrayHasKey('dbName', $db->getDbName());
    }

    public function testCheckIfHasKey(): void
    {
        $userArray = [
            "name" => "saranga",
            "age" => 25
        ];

        $this->assertArrayHasKey('age', $userArray);
    }
}