<?php namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;

use App\campaign\entities\Quotemodel;
use App\campaign\entities\Quotecompute;
use App\campaign\entities\Client;
use App\campaign\entities\Quotemodelclient;
use App\campaign\entities\Quotecomputeclient;

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
		$client = Client::create([
			
			//"id" => 4,
			"name" => $request->client
		]);
		$quote = Quotemodelclient::create([
			
			//"id" => 4,
			"model" => $request->q_hidden,
			"client" => $client->id
		]);

		$compute = Quotecomputeclient::create([
			
			//"id" => 4,
			"name" => "Dominio",
			"price" => $request->dominio,
			"required" => 1,
			"quotemodel" => $quote->id
		]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Hosting",
        	"price" => $request->hosting,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mail",
			"price" => $request->mail,
			"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Seguridad",
			"price" => $request->seguridad,
			"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "ComisionT",
        	"price" => $request->comisiont,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Site",
        	"price" => $request->site,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Administracion",
        	"price" => $request->administracion,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "SEO",
        	"price" => $request->seo,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Analytics",
        	"price" => $request->analytics,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Estrategia",
        	"price" => $request->estrategia,
        	"required" => 1,
			"quotemodel" => $quote->id
        ]);

        	if ($request->add_SEM == 1) {
        	
        		$mount = $request->sem;
        	} else {
        	
        		$mount = 0;
        	}
        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "SEM",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quote->id
        ]);
        	if ($request->add_Mobile == 1) {
        	
        		$mount = $request->mobile;
        	} else {
        	
        		$mount = 0;
        	}

        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mobile",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quote->id
        ]);
        	if ($request->add_Web == 1) {
        	
        		$mount = $request->web;
        	} else {
        	
        		$mount = 0;
        	}

        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Web",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quote->id
        ]);
        	if ($request->add_Mailchimp == 1) {
        	
        		$mount = $request->mailchimp;
        	} else {
        	
        		$mount = 0;
        	}

        $compute = Quotecomputeclient::create([
        	
        	//"id" => "1",
        	"name" => "Mailchimp",
        	"price" => $mount,
        	"required" => 0,
			"quotemodel" => $quote->id
        ]);

		return view('which_client');
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
}
