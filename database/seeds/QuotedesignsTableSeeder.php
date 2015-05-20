<?php

use Illuminate\Database\Seeder;
use App\campaign\entities\Quotedesign;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class QuotedesignsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

// GOBERNADOR
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Logo",
        	"price" => 1000000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Imagen",
        	"price" => 3000000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Carpeta",
        	"price" => 800000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Volante",
        	"price" => 150000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Afiche",
        	"price" => 450000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Pendon",
        	"price" => 150000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Merchandising",
        	"price" => 150000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Retablos",
        	"price" => 450000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Catalogo6",
        	"price" => 850000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Catalogo16",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Fee",
        	"price" => 2000000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Recurso",
        	"price" => 200000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);

// ALCALDE DE BOGOTA
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Logo",
        	"price" => 2000000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Imagen",
        	"price" => 6000000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Carpeta",
        	"price" => 1600000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Volante",
        	"price" => 300000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Afiche",
        	"price" => 450000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Pendon",
        	"price" => 150000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Merchandising",
        	"price" => 150000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Retablos",
        	"price" => 450000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Catalogo6",
        	"price" => 850000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Catalogo16",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Fee",
        	"price" => 2000000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotedesign::create([
        	
        	//"id" => "1",
        	"name" => "Recurso",
        	"price" => 200000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
    }
}
