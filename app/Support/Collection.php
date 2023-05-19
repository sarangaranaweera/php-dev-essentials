<?php

declare(strict_types=1);

namespace App\Support;

class Collection
{
    protected $items;

    public function __construct($array)
    {
        $this->items = $array;
    }

    public function getData()
    {
        $data = [];

        foreach ($this->items as $item) {
            $data[] = $item;
        }

        return $data;
    }
}
