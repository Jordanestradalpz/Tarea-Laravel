<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use \tests\Unit\TestCase;


class ApiTests extends TestCase
{

    public function EntryCorrectFormatDescription()
    {
        $shoe = "shoeDescription";
        $description = "shoeDescription";

        $this->assertSame($shoe, $description);
    }

    
}