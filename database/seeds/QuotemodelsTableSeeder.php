<?php

use Illuminate\Database\Seeder;
use App\campaign\entities\Quotemodel;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class QuotemodelsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Quotemodel::create([
        	
        	//"id" => "1",
        	"name" => "Pymes",
        ]);
        Quotemodel::create([
        	
        	//"id" => "1",
        	"name" => "Grandes empresas",
        ]);

    }
}
