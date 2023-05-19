<?php

use App\Support\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function checkIfDataPresent()
    {   
        $collect = new Collection([]);

        $this->assertEmpty($collect->getData());
    }
}