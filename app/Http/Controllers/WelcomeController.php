<?php namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;

use App\campaign\entities\Quotemodel;
use App\campaign\entities\Quotecompute;
use App\campaign\entities\Client;
use App\campaign\entities\Quotemodelclient;
use App\campaign\entities\Quotecomputeclient;
use App\campaign\entities\Quotetotal;
use App\campaign\entities\Quotedesign;
use App\campaign\entities\Quotedesignclient;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function hola()
	{
		$quotes = Quotemodel::all();
		$quotecomputes = array();
		foreach( $quotes as $quote ) {
		
			$quote_tmp = Quotecompute::where('quotemodel', '=', $quote->id)->get();
			array_push($quotecomputes, $quote_tmp);
		}
		return view('hola', compact('quotes', 'quotecomputes'));
	}

	public function design($total)
	{
		return view('design', compact('total'));
	}

	public function save_quote(QuoteRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);
		$mount = 0;
		$aggregate = 0;
		$client = Client::create([
			
			//"id" => 4,
			"name" => $request->client
		]);
		$quotemodel = Quotemodelclient::create([
			
			//"id" => 4,
			"model" => $request->q_hidden,
			"client" => $client->id
		]);

		$compute = Quotecomputeclient::create([
			
			//"id" => 4,
			"name" => "Dominio",
			"price" => $request->dominio,
			"required" => 1,
			"quotemodel" => $quotemodel->id
		]);
		$aggregate += $request->dominio;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Hosting",
        	"price" => $request->hosting,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->hosting;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mail",
			"price" => $request->mail,
			"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->mail;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Seguridad",
			"price" => $request->seguridad,
			"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->seguridad;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "ComisionT",
        	"price" => $request->comisiont,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->comisiont;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Site",
        	"price" => $request->site,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->site;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Administracion",
        	"price" => $request->administracion,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->administracion;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "SEO",
        	"price" => $request->seo,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->seo;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Analytics",
        	"price" => $request->analytics,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);
        $aggregate += $request->analytics;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Estrategia",
        	"price" => $request->estrategia,
        	"required" => 1,
			"quotemodel" => $quotemodel->id
        ]);

        	if ($request->add_SEM == 1) {
        	
        		$mount = $request->sem;
        	} else {
        	
        		$mount = 0;
        	}
        $aggregate += $mount;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "SEM",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quotemodel->id
        ]);
        	if ($request->add_Mobile == 1) {
        	
        		$mount = $request->mobile;
        	} else {
        	
        		$mount = 0;
        	}
        $aggregate += $mount;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mobile",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quotemodel->id
        ]);
        	if ($request->add_Web == 1) {
        	
        		$mount = $request->web;
        	} else {
        	
        		$mount = 0;
        	}
        $aggregate += $mount;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Web",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quotemodel->id
        ]);
        	if ($request->add_Mailchimp == 1) {
        	
        		$mount = $request->mailchimp;
        	} else {
        	
        		$mount = 0;
        	}
        $aggregate += $mount;
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mailchimp",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quotemodel->id
        ]);

// TOTAL
		$total = Quotetotal::create([
			
			//"id" => 4,
			"modelclient" => $quotemodel->id,
			"compute" => $aggregate,
			"total" => $aggregate
		]);

		$donde = $request->quotecategory;
		if ($donde == 1) {

			$quotes = Quotemodel::all();
			$quotedesigns = array();
			$many = 0;
			foreach( $quotes as $quote ) {
			
				$quote_tmp = Quotedesign::where('quotemodel', '=', $quote->id)->get();
				array_push($quotedesigns, $quote_tmp);
				if ($many == 0) {
				
					$many = count($quote_tmp);
				}

			}
			return view('design', compact('total', 'client', 'quotemodel', 'quotes', 'quotedesigns', 'many', 'total'));
		} else {
		
			return view('which_client');
		}
		
	}

	public function save_quote_design(QuoteRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);
		$quotemodel = Quotemodelclient::find($request->quote);
		$client = Client::find($request->client);
		$mount = 0;
		$aggregate = 0;

		$i = 1;
		do {

			if ($request->{"add_" . $i} == 1) {
        	
        		$mount = $request->{"product_" . $i};
        	} else {
        	
        		$mount = 0;
        	}
			$aggregate += $mount;
			$design = Quotedesignclient::create([
				
				//"id" => "1",
				"name" => $request->{"name_" . $i},
				"price" => $mount,
				"required" => 0,
				"quotemodel" => $quotemodel->id
			]);
			$i++;
		} while( $i <= $request->many );

// TOTAL
		$total = Quotetotal::find($request->total);
		$total->update([
			
			//"id" => "1",
			"design" => $aggregate,
			"total" => $total->total + $aggregate,
		]);

		$donde = $request->quotecategory;
		if ($donde == 1) { // TOTAL

			return view('total', compact('total', 'client', 'quote'));
		} else {
		
			return view('which_client');
		}
		
	}
	
	public function which_client()
	{
		return view('which_client');
	}
	
	public function which_client_go(QuoteRequest $request)
	{
		$clients = Client::where('name', '=', $request->client)->get();

		$quote_tmp = Quotemodelclient::where('client', '=', $clients[0]->id)->get();
		$quotes = array();
		array_push($quotes, $quote_tmp[0]);

		$quote_tmp = Quotecomputeclient::where('quotemodel', '=', $quotes[0]->id)->get();
		$quotecomputes = array();
		array_push($quotecomputes, $quote_tmp);

		$quotemodels = Quotemodel::all();
		foreach( $quotemodels as $quote ) {
		
			array_push($quotes, $quote);
			$quote_tmp = Quotecompute::where('quotemodel', '=', $quote->id)->get();
			array_push($quotecomputes, $quote_tmp);
		}		

		return view('which_client_go', compact('clients', 'quotes', 'quotecomputes'));
	}

	public function store_quote(QuoteRequest $request)
	{
		//
		//dd('Esta es la idol ' . $request->name);

		$mount = 0;

		$quotecomputes = Quotecomputeclient::where('quotemodel', '=', $request->q_compute)->get();
		foreach( $quotecomputes as $quotecompute ) {

			if ($quotecompute->name == "SEM") {

					if ($request->add_SEM == 1) {
					
						$mount = $request->sem;
					} else {
					
						$mount = 0;
					}
				$quotecompute->update([
					
					//"id" => "1",
					"price" => $mount,
				]);
			}
			if ($quotecompute->name == "Mobile") {

					if ($request->add_Mobile == 1) {
					
						$mount = $request->mobile;
					} else {
					
						$mount = 0;
					}
				$quotecompute->update([
					
					//"id" => "1",
					"price" => $mount,
				]);
			}
			if ($quotecompute->name == "Web") {

					if ($request->add_Web == 1) {
					
						$mount = $request->web;
					} else {
					
						$mount = 0;
					}
				$quotecompute->update([
					
					//"id" => "1",
					"price" => $mount,
				]);
			}
			if ($quotecompute->name == "Mailchimp") {

					if ($request->add_Mailchimp == 1) {
					
						$mount = $request->mailchimp;
					} else {
					
						$mount = 0;
					}
				$quotecompute->update([
					
					//"id" => "1",
					"price" => $mount,
				]);
			}
		}

		return $this->which_client_go($request);
	}
}
