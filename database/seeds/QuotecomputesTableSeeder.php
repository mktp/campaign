<?php

use Illuminate\Database\Seeder;
use App\campaign\entities\Quotecompute;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class QuotecomputesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

// GOBERNADOR
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Dominio",
        	"price" => 64000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Hosting",
        	"price" => 25000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mail",
        	"price" => 6000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Seguridad",
        	"price" => 25000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "ComisionT",
        	"price" => 36000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Site",
        	"price" => 1500000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Administracion",
        	"price" => 400000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "SEO",
        	"price" => 100000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Analytics",
        	"price" => 120000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Estrategia",
        	"price" => 400000,
        	"required" => 1,
        	"quotemodel" => 1,
        ]);

        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "SEM",
        	"price" => 1000000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mobile",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Web",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mailchimp",
        	"price" => 0,
        	"required" => 0,
        	"quotemodel" => 1,
        ]);

// ALCALDE DE BOGOTA
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Dominio",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Hosting",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mail",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Seguridad",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "ComisionT",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Site",
        	"price" => 1500000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Administracion",
        	"price" => 400000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "SEO",
        	"price" => 100000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Analytics",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Estrategia",
        	"price" => 1000000,
        	"required" => 1,
        	"quotemodel" => 2,
        ]);

        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "SEM",
        	"price" => 1000000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mobile",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Web",
        	"price" => 1500000,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
        Quotecompute::create([
        	
        	//"id" => "1",
        	"name" => "Mailchimp",
        	"price" => 0,
        	"required" => 0,
        	"quotemodel" => 2,
        ]);
    }
}
