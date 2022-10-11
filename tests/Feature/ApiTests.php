<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

require 'ZapatoController.php';

class ApiTests extends TestCase
{

    public function EntryCorrectFormatDescription()
    {
        $Shoe = new Zapato();

        if($shoe->description = string)
        true;
        else{
            false;
        }
    }

    public function ReturnCorrectInfoIndex()
    {
        $Shoe1 = Zapato::all();
        return $Shoe1;

        $Shoe1->assertEqual('description','size','price','stock');
    }
}
